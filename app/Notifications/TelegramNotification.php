<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private ?string $name = null, private ?string $contact = null, private ?string $text = null, private ?string $email = null)
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
        return ['telegram'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toTelegram($notifiable)
    {
        if ($this->name) {
            $text = "Имя: " . $this->name . "\n" . "Контакт: " . $this->contact . "\n" . "Вопрос: " . $this->text;
        } else {
            $text = "Email: " . $this->email;
        }
        return TelegramMessage::create()
            ->to('-4741635887')
            ->line("Новая заявка на консультацию")
            ->line($text)
            ;
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
