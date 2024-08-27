<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketEmail extends Notification
{
    use Queueable;
        public $ticket;


    /**
     * Create a new notification instance.
     */
    public function __construct($ticket)
    {
                $this->ticket = $ticket;

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
                   ->subject('Ticket Submitted Successfully')
                    ->line('Thank you for submitting your ticket.')
                    ->line('Your Ticket Number: ' . $this->ticket->ticket_number)
                    ->line('Subject: ' . $this->ticket->subject)
                    ->line('Description: ' . $this->ticket->description)
                    ->line('Priority: ' . $this->ticket->priority)
                    ->line('We will get back to you shortly.');
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