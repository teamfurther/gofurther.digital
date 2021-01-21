<?php

namespace App\Http\Middleware;

use App\Http\UTMBag;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TrackUTMParametersMiddleware
{
    protected UTMBag $UTMBag;

    public function __construct(UTMBag $UTMBag)
    {
        $this->UTMBag = $UTMBag;
    }

    /**
     * @return Closure|RedirectResponse|Redirector
     */
    public function handle(Request $request, Closure $next)
    {
        $this->UTMBag->putFromRequest($request);

        return $next($request);
    }
}
