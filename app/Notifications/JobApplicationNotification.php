<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\View\Factory as View;

class JobApplicationNotification extends Notification
{

    /**
     * Data for the notification.
     *
     * @var array<string>
     */
    protected $data;

    /**
     * Reference to view object
     * which will be injected.
     *
     * @var \Illuminate\View\Factory
     */
    protected $view;

    /**
     * Create a new notification instance.
     *
     * @param array<string> $data
     */
    public function __construct(array $data, View $view)
    {
        $this->data = $data;
        $this->view = $view;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<string>
     */
    public function via(): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(): MailMessage
    {
        $slot = $this->view->make('emails.job_application', [
            'data' => $this->data,
        ]);

        $mail = new MailMessage();
        $mail->subject('New job application');

        $mail->view('emails.email', [
            'slot' => $slot,
        ]);

        return $mail;
    }

}
