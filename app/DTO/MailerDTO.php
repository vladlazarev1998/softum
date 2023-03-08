<?php

namespace App\DTO;

class MailerDTO
{
    /**
     * @var string
     */
    public string $from;

    /**
     * @var string
     */
    public string $to;

    /**
     * @var string
     */
    public string $cc;

    /**
     * @var string
     */
    public string $subject;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $body;

    /**
     * @param string $from
     * @param string $to
     * @param string $cc
     * @param string $subject
     * @param string $type
     * @param string $body
     */
    public function __construct(string $from, string $to, string $cc, string $subject, string $type, string $body)
    {
        $this->from = $from;
        $this->to = $to;
        $this->cc = $cc;
        $this->subject = $subject;
        $this->type = $type;
        $this->body = $body;
    }


    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getCC(): string
    {
        return $this->cc;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

}
