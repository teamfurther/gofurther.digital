<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrivateContentFormRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PrivateContentController
{
    public function show(): View
    {
        return view(getLang() . '.private-content.show');
    }

    public function verify(PrivateContentFormRequest $request, Session $session): RedirectResponse
    {
        $session->put(config('private-content.session_key'), config('private-content.access_key'));

        return redirect($request->get('referer', '/'));
    }
}
