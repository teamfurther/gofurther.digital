<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewsletterSubscriberAction;
use App\Http\Requests\NewsletterSubscriptionFormRequest;
use App\Notifications\NewsletterSubscribedNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\View\View;

class NewsletterController
{
    protected AnonymousNotifiable $notifiable;

    protected ViewFactory $view;

    public function __construct(AnonymousNotifiable $notifiable, ViewFactory $view)
    {
        $this->notifiable = $notifiable;
        $this->view = $view;
    }
    public function show(string $issue): View
    {
        if (!view()->exists(getLang() . '.newsletter.issues.' . $issue)) {
            abort(404);
        }

        return view(getLang() . '.newsletter.issues.' . $issue);
    }

    public function subscribe(
        NewsletterSubscriptionFormRequest $request,
        CreateNewsletterSubscriberAction $createNewsletterSubscriberAction
    ): RedirectResponse
    {
        if ($createNewsletterSubscriberAction->execute(
            $request->get('email'),
            $request->get('name'),
            $request->get('source')
        )) {

            $this->notifiable->route('mail', config('mail.to'))
                ->notify(new NewsletterSubscribedNotification([
                    'email' => $request->get('email'),
                    'name' => $request->get('name'),
                ], $this->view));

            return redirect()->back()->with('alert', [
                'gtm' => '{ "success": { "event_category": "newsletter", "event_label": "subscribe" } }',
                'message' => __('newsletter.success.message'),
                'title' => __('newsletter.success.title'),
                'type' => 'success',
            ]);
        }

        return redirect()->back()->with('alert', [
            'message' => __('newsletter.error.message'),
            'title' => __('newsletter.error.title'),
            'type' => 'error',
        ]);
    }
}
