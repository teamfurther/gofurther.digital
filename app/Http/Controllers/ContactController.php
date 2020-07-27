<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Notifications\ContactNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\View\View;

class ContactController
{
    protected AnonymousNotifiable $notifiable;

    protected ViewFactory $view;

    public function __construct(AnonymousNotifiable $notifiable, ViewFactory $view)
    {
        $this->notifiable = $notifiable;
        $this->view = $view;
    }

    public function send(ContactFormRequest $request): RedirectResponse
    {
        $this->notifiable->route('mail', config('mail.to'))
            ->notify(new ContactNotification([
                'company' => $request->get('company'),
                'email' => $request->get('email'),
                'message' => $request->get('message'),
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
            ], $this->view));

        return redirect()->back()->with('alert', [
            'gtm' => '{ "success": { "event_category": "form", "event_label": "send" } }',
            'message' => __('contact.success.message'),
            'title' => __('contact.success.title'),
            'type' => 'success',
        ]);
    }

    public function show(): View
    {
        return view(getLang() . '.contact.show');
    }
}
