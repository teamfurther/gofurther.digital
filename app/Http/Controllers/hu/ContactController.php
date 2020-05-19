<?php

namespace App\Http\Controllers\HU;

use App\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory as View;

class ContactController extends Controller
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

    public function send(ContactFormRequest $request): RedirectResponse
    {
        User::findOrFail(1)->notify(new ContactNotification([
            'name' => $request->get('contact_name'),
            'company' => $request->get('contact_company'),
            'email' => $request->get('contact_email'),
            'phone' => $request->get('contact_phone'),
            'message' => $request->get('contact_message'),
        ], $this->view));

        return redirect()->back()->with('alert', [
            'type' => 'success',
            'title' => 'Üzenet elküldve!',
            'message' => 'Üzeneted rögzítettük. Hamarosan felvesszük Veled a kapcsolatot.',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view(getLang() . '.contact.show');
    }

}
