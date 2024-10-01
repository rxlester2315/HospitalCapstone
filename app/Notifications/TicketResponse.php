<?php

namespace App\Notifications;
use App\Models\ticket;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketResponse extends Notification
{
    use Queueable;
    public $dataz;

    /**
     * Create a new notification instance.
     */
    public function __construct($dataz)
    {
        $this->dataz = $dataz;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Your Support Ticket Has Been Received')
                    ->line('Thank you for reaching out to us!')
                    ->line('Issue Reported: ' .$this->dataz->subject)
                    ->line('Description: ' . $this->dataz->description)
                    ->line('Status: ' . $this->dataz->status)
                    ->line('Our Response: ' . $this->dataz->reply)
                    ->line('We will keep you updated with further details.')
                    ->line('Thank you!')
                    ->salutation('Best regards, Your Support Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}