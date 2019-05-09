<?php

namespace App\Http\Controllers\EN;

use App\Controller;
use App\Http\Requests\JobApplicationFormRequest;
use App\Models\Job;
use App\Models\User;
use App\Notifications\JobApplicationNotification;

class JobsController extends Controller
{

    public function index()
    {
        return view(getLang() . '.jobs.index')->with([
            'jobs' => Job::all()
        ]);
    }

    public function view($slug)
    {
        $job = Job::where('slug', $slug)->first();

        if (!$job)
            abort(404);

        return view(getLang() . '.jobs.view')->with([
            'job' => $job
        ]);
    }

    public function send(JobApplicationFormRequest $request)
    {
        User::findOrFail(1)->notify(new JobApplicationNotification([
            'job' => $request->get('job'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'git' => $request->get('git'),
            'cv' => $request->get('cv'),
            'message' => $request->get('message')
        ]));

        return redirect()->back()->with('alert', [
            'type' => 'success',
            'title' => 'You\'re awesome!',
            'message' => 'Your application has been registered. We\'ll be contacting you in case we find you suitable for a position at our firm.'
        ]);
    }

}
