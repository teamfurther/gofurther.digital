<?php

namespace App\Http\Controllers\HU;

use App\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\User;
use App\Notifications\ContactNotification;

class PagesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(getLang() . '.pages.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view(getLang() . '.pages.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function comingSoon()
    {
        return view(getLang() . '.pages.coming-soon');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function customDevelopment()
    {
        return view(getLang() . '.pages.custom-development');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function services()
    {
        return view(getLang() . '.pages.services');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function techStack()
    {
        return view(getLang() . '.pages.tech-stack');
    }

    /**
     * @param ContactFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact(ContactFormRequest $request)
    {
        User::findOrFail(1)->notify(new ContactNotification([
            'name' => $request->get('contact_name'),
            'company' => $request->get('contact_company'),
            'email' => $request->get('contact_email'),
            'phone' => $request->get('contact_phone'),
            'message' => $request->get('contact_message')
        ]));

        return redirect()->back()->with('alert', [
            'type' => 'success',
            'title' => 'Üzenet elküldve!',
            'message' => 'Üzenetét rögzítettük. Hamarosan felvesszük Önnel a kapcsolatot.'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cookies()
    {
        return view(getLang() . '.pages.cookies');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacy()
    {
        return view(getLang() . '.pages.privacy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms()
    {
        return view(getLang() . '.pages.terms');
    }

}
