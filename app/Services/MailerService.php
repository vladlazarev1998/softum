<?php

namespace App\Services;

use App\DTO\MailerDTO;
use App\Models\Mailer;

class MailerService
{
    /**
     * @param MailerDTO $mailerDTO
     * @return Mailer
     */
    public function save(MailerDTO $mailerDTO): Mailer
    {
        $mailer = Mailer::create([
            'from' => $mailerDTO->getFrom(),
            'to' => $mailerDTO->getTo(),
            'cc' => $mailerDTO->getCC(),
            'subject' => $mailerDTO->getSubject(),
            'type' => $mailerDTO->getType(),
            'body' => $mailerDTO->getBody()
        ]);

        return $mailer;
    }
}
