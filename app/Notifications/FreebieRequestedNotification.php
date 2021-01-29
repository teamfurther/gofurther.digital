<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\View\Factory as View;

class FreebieRequestedNotification extends Notification
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
        $slot = $this->view->make('emails.' . getLang() . '.freebie-requested', [
            'data' => $this->data,
        ]);

        $mail = new MailMessage();
        $mail->subject(__('freebies.subject'));

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
