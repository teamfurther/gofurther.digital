<?php

namespace App\Http\Controllers\EN;

use App\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\User;
use App\Notifications\ContactNotification;

class PagesController extends Controller
{

    public function index()
    {
        return view(getLang() . '.pages.home');
    }

    public function about()
    {
        return view(getLang() . '.pages.about');
    }

    public function comingSoon()
    {
        return view(getLang() . '.pages.coming-soon');
    }

    public function customDevelopment()
    {
        return view(getLang() . '.pages.custom-development');
    }

    public function services()
    {
        return view(getLang() . '.pages.services');
    }

    public function techStack()
    {
        return view(getLang() . '.pages.tech-stack');
    }

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
            'title' => 'Message sent!',
            'message' => 'We have received your message. One of our representatives will contact you shortly.'
        ]);
    }

    public function cookies()
    {
        return view(getLang() . '.pages.cookies');
    }

    public function privacy()
    {
        return view(getLang() . '.pages.privacy');
    }

    public function terms()
    {
        return view(getLang() . '.pages.terms');
    }

}
