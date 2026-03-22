<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmed extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $Maildata)
    {
        //
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
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Profile Update Confirmation')
            ->greeting('Hello ' . ($notifiable->name ?? 'User') . '!')
            ->line($this->Maildata['me'] ?? 'Your profile has been updated.')
            ->line($this->Maildata['t'] ?? 'Thank you for using our app!')
            ->action('View Profile', url('/profile'))
            ->line('If you did not make this change, please contact support.');
    }
}