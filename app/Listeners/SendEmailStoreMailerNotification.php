<?php

namespace App\Listeners;

use App\Events\StoreMailer;

class SendEmailStoreMailerNotification
{
    /**
     * Handle the event.
     */
    public function handle(StoreMailer $event): void
    {
        (new \App\Helpers\Mailer())->send($event->mailer);
    }
}
