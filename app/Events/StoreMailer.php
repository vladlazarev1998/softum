<?php

namespace App\Events;

use App\DTO\MailerDTO;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StoreMailer
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var MailerDTO
     */
    public $mailer;

    /**
     * Create a new event instance.
     */
    public function __construct(MailerDTO $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
