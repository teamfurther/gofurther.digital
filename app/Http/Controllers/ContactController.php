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
                'company' => $request->get('contact_company'),
                'email' => $request->get('contact_email'),
                'message' => $request->get('contact_message'),
                'name' => $request->get('contact_name'),
                'phone' => $request->get('contact_phone'),
            ], $this->view));

        return redirect()->back()->with('alert', [
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
