<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\View;

class ContactNotification extends Notification
{
    /**
     * The email verification token.
     *
     * @var string
     */
    protected $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $slot = View::make('emails.contact_message', [
            'data' => $this->data,
        ]);

        $mail = new MailMessage();
        $mail->subject('New contact message');

        $mail->view('emails.email', [
            'slot' => $slot,
        ]);

        return $mail;
    }
}
