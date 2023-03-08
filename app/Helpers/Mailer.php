<?php

namespace App\Helpers;

use App\DTO\MailerDTO;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }

    public function send(MailerDTO $mailer)
    {
        $this->mail->SMTPDebug = 0;
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;

        $this->mail->Host = config('mail.mailers.smtp.host');
        $this->mail->Username = config('mail.mailers.smtp.username');
        $this->mail->Password = config('mail.mailers.smtp.password');
        $this->mail->SMTPSecure = config('mail.mailers.smtp.encryption');
        $this->mail->Port = config('mail.mailers.smtp.port');

        $this->mail->setFrom($mailer->getFrom());
        $this->mail->addAddress($mailer->getTo());

        if ($mailer->getCC()) {
            $this->mail->addCC($mailer->getCC());
        }

        $this->mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        if ($mailer->getType() == 'html') {
            $this->mail->isHTML(true);
        }

        $this->mail->Subject = $mailer->getSubject();
        $this->mail->Body = $mailer->getBody();

        $this->mail->send();
    }
}
