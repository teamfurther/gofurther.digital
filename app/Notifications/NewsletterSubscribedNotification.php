<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\View\Factory as View;

class NewsletterSubscribedNotification extends Notification
{
    /**
     * @var array<string>
     */
    protected array $data;

    protected View $view;

    /**
     * @param array<string> $data
     */
    public function __construct(array $data, View $view)
    {
        $this->data = $data;
        $this->view = $view;
    }

    public function toMail(): MailMessage
    {
        $slot = $this->view->make('emails.newsletter_subscriber', [
            'data' => $this->data,
        ]);

        $mail = new MailMessage();
        $mail->subject('New newsletter subscriber');

        $mail->view('emails.email', [
            'slot' => $slot,
        ]);

        return $mail;
    }

    /**
     * @return array<string>
     */
    public function via(): array
    {
        return ['mail'];
    }
}
