<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewsletterSubscriberAction;
use App\Http\Requests\FreebiesGetFormRequest;
use App\Http\UTMBag;
use App\Notifications\FreebieRequestedNotification;
use App\Notifications\NewsletterSubscribedNotification;
use Illuminate\Encryption\Encrypter;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\View\Factory as ViewFactory;
use Symfony\Component\HttpFoundation\StreamedResponse;

class FreebiesController
{
    public function download(Request $request, FilesystemManager $storage, Encrypter $encrypter): StreamedResponse
    {
        if ($request->missing('key')) {
            abort(400);
        }

        $freebie = $encrypter->decrypt($request->get('key'));

        if ($storage->missing($freebie)) {
            abort(404);
        }

        return $storage->download($freebie);
    }

    public function get(
        FreebiesGetFormRequest $request,
        AnonymousNotifiable $notifiable,
        CreateNewsletterSubscriberAction $createNewsletterSubscriberAction,
        ViewFactory $view
    ): RedirectResponse
    {
        $subscriptionResult = $createNewsletterSubscriberAction->execute(
            $request->get('email'),
            $request->get('name'),
            $request->get('source')
        );

        if ($subscriptionResult) {
            if ($subscriptionResult === 1) {
                $notifiable->route('mail', config('mail.to'))
                    ->notify(new NewsletterSubscribedNotification([
                        'email' => $request->get('email'),
                        'name' => $request->get('name'),
                        'source' => $request->get('source'),
                        'utm' => app(UTMBag::class)->get(),
                    ], $view));
            }

            $notifiable->route('mail', $request->get('email'))
                ->notify(new FreebieRequestedNotification([
                    'name' => $request->get('name'),
                    'freebie' => $request->get('freebie'),
                ], $view));

            return redirect()->back()->with('alert', [
                'gtm' => '{ "success": { "event_category": "newsletter", "event_label": "subscribe" } }',
                'message' => __('freebies.success.message'),
                'title' => __('freebies.success.title'),
                'type' => 'success',
            ]);
        }

        return redirect()->back()->with('alert', [
            'message' => __('freebies.error.message'),
            'title' => __('freebies.error.title'),
            'type' => 'error',
        ]);
    }
}
