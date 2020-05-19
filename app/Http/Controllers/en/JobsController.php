<?php

namespace App\Http\Controllers\EN;

use App\Controller;
use App\Http\Requests\JobApplicationFormRequest;
use App\Models\Job;
use App\Models\User;
use App\Notifications\JobApplicationNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory as View;

class JobsController extends Controller
{

    /**
     * Reference to view object
     * which will be injected.
     *
     * @var View
     */
    protected $view;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(getLang() . '.jobs.index')->with([
            'jobs' => Job::all(),
        ]);
    }

    public function send(JobApplicationFormRequest $request): RedirectResponse
    {
        User::findOrFail(1)->notify(new JobApplicationNotification([
            'job' => $request->get('job'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'git' => $request->get('git'),
            'cv' => $request->get('cv'),
            'message' => $request->get('message'),
        ], $this->view));

        return redirect()->back()->with('alert', [
            'type' => 'success',
            'title' => 'You\'re awesome!',
            'message' => 'Your application has been registered. We\'ll be contacting you in case we find you suitable for a position at our firm.',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug)
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
