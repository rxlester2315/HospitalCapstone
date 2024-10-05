<?php



namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifiedNotification extends Notification
{
    use Queueable;

    protected $name;

    /**
     * Create a new notification instance.
     */
    public function __construct($name)
    {
        $this->name = $name; // Pass the user's name or email
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
                    ->line('Hello ' . $this->name . ', Congratss your account has been verified.')
                    ->action('Visit our site', url('/'))
                     ->line('Thank you for registering with us! We’re thrilled to have you as part of our community.')
                ->line('- Explore our features: Discover all the tools available to you.')
                ->line('- Visit our help center: If you have any questions, our help center is here to assist you.')
                ->line('- Join the conversation: Follow us on social media to stay updated on the latest news and tips.')
                ->line('If you have any questions or need assistance, feel free to reach out. We\'re here to help!')
                ->line('Thank you for choosing us, and welcome aboard!')
                ->salutation('The ERP SYSTEM Team');

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