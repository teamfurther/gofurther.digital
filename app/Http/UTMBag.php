<?php

namespace App\Http;

use App\Actions\DetermineUTMParametersFromRequestAction;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UTMBag
{
    protected $determineUTMParametersFromRequestAction;

    protected Session $session;

    public function __construct(
        DetermineUTMParametersFromRequestAction $determineUTMParametersFromRequestAction,
        Session $session
    )
    {
        $this->determineUTMParametersFromRequestAction = $determineUTMParametersFromRequestAction;
        $this->session = $session;
    }

    /**
     * @return array<string>
     */
    public function get(): array
    {
        return $this->session->get('utm', []);
    }

    public function putFromRequest(Request $request)
    {
        $parameters = $this->determineUTMParametersFromRequestAction->execute($request);

        if (!$this->session->has('utm')) {
            $this->session->put('utm', $parameters);
        }
    }
}