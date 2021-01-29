<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewsletterSubscriberAction;
use App\Actions\GetNewsletterIssuesAction;
use App\Actions\GetNewsletterIssueViewAction;
use App\Http\Requests\NewsletterSubscriptionFormRequest;
use App\Http\UTMBag;
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

    public function index(GetNewsletterIssuesAction $getNewsletterIssuesActionAction): View
    {
        $issuesByYear = $getNewsletterIssuesActionAction->execute();

        if (!$issuesByYear) {
            abort(404);
        }

        return view(getLang() . '.newsletter.index')->with([
            'issuesByYear' => $issuesByYear,
        ]);
    }

    public function show(
        GetNewsletterIssueViewAction $getNewsletterIssueViewAction,
        string $year,
        string $issue
    ): View
    {
        $view = $getNewsletterIssueViewAction->execute($year, $issue);

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view);
    }

    public function subscribe(
        NewsletterSubscriptionFormRequest $request,
        CreateNewsletterSubscriberAction $createNewsletterSubscriberAction
    ): RedirectResponse
    {
        $subscriptionResult = $createNewsletterSubscriberAction->execute(
            $request->get('email'),
            $request->get('name'),
            $request->get('source')
        );

        if ($subscriptionResult) {
            if ($subscriptionResult === 1) {
                $this->notifiable->route('mail', config('mail.to'))
                    ->notify(new NewsletterSubscribedNotification([
                        'email' => $request->get('email'),
                        'name' => $request->get('name'),
                        'utm' => app(UTMBag::class)->get(),
                    ], $this->view));
            }

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
