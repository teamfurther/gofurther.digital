<?php

namespace App\Http\Controllers;

use App\Actions\ConfirmWebinarParticipantAction;
use App\Actions\CreateWebinarRegistrantAction;
use App\Actions\GetWebinarBySlugAction;
use App\Actions\GetWebinarConfirmedSpotsAction;
use App\Http\Requests\WebinarConfirmationRequest;
use App\Http\Requests\WebinarRegistrationFormRequest;
use App\Http\UTMBag;
use App\Notifications\WebinarRegistrationNotification;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\View\Factory as ViewFactory;
use Symfony\Component\HttpFoundation\Response;

class WebinarController
{
    public function confirm(
        WebinarConfirmationRequest $request,
        ConfirmWebinarParticipantAction $confirmWebinarParticipantAction,
    ): Response
    {
        return $confirmWebinarParticipantAction->execute(
            $request->get('email'),
            $request->get('webinar'),
        );
    }

    public function register(
        WebinarRegistrationFormRequest $request,
        AnonymousNotifiable $notifiable,
        ViewFactory $view,
        CreateWebinarRegistrantAction $createWebinarRegistrantAction,
    ): RedirectResponse
    {
        $registrationResult = $createWebinarRegistrantAction->execute(
            $request->get('email'),
            $request->get('name'),
            $request->get('source'),
            $request->get('webinar'),
        );

        if ($registrationResult) {
            if ($registrationResult === 1) {
                $notifiable->route('mail', config('mail.to'))
                    ->notify(new WebinarRegistrationNotification([
                        'email' => $request->get('email'),
                        'name' => $request->get('name'),
                        'source' => $request->get('source'),
                        'utm' => app(UTMBag::class)->get(),
                    ], $view));
            }

            return redirect()->back()->with('alert', [
                'gtm' => '{ "success": { "event_category": "newsletter", "event_label": "subscribe" } }',
                'message' => 'Success! We will notify you of further steps and event details via email!',
                'title' => 'You\'re awesome!',
                'type' => 'success',
            ]);
        }

        return redirect()->back()->with('alert', [
            'message' => 'Something went wrong with your registration. Please try again later or write us at <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
            'title' => 'Uh-oh!',
            'type' => 'error',
        ]);
    }

    public function show(
        Request $request,
        GetWebinarBySlugAction $getWebinarViewFromUrlAction,
        GetWebinarConfirmedSpotsAction $getWebinarConfirmedSpotsAction,
    )
    {
        $webinar = $getWebinarViewFromUrlAction->execute(
            $request->segment(count($request->segments()))
        );

        $config = config('webinars.' . $webinar);

        return view(getLang() . '.webinars.' . $webinar, [
            'confirmedSpots' => $getWebinarConfirmedSpotsAction->execute($webinar),
            'date' => $config['next'] ? new Carbon($config['next']) : null,
            'duration' => $config['duration'],
            'totalSpots' => $config['spots'],
        ]);
    }
}
