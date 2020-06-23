<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobApplicationFormRequest;
use App\Models\Job;
use App\Notifications\JobApplicationNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\View\View;

class JobsController
{
    protected AnonymousNotifiable $notifiable;

    protected ViewFactory $view;

    public function __construct(AnonymousNotifiable $notifiable, ViewFactory $view)
    {
        $this->notifiable = $notifiable;
        $this->view = $view;
    }

    public function index(): View
    {
        return view(getLang() . '.jobs.index')->with([
            'jobs' => Job::all(),
        ]);
    }

    public function send(JobApplicationFormRequest $request): RedirectResponse
    {
        $this->notifiable->route('mail', config('mail.to'))
            ->notify(new JobApplicationNotification([
                'cv' => $request->get('cv'),
                'email' => $request->get('email'),
                'git' => $request->get('git'),
                'job' => $request->get('job'),
                'message' => $request->get('message'),
                'name' => $request->get('name'),
            ], $this->view));

        return redirect()->back()->with('alert', [
            'message' => __('jobs.success.message'),
            'title' => __('jobs.success.title'),
            'type' => 'success',
        ]);
    }

    public function show(string $slug): View
    {
        $job = Job::where('slug', $slug)->first();

        if (!$job) {
            abort(404);
        }

        return view(getLang() . '.jobs.show')->with([
            'job' => $job,
        ]);
    }
}
