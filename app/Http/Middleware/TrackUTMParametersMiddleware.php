<?php

namespace App\Http\Middleware;

use App\Http\UTMBag;
use Closure;
use Illuminate\Http\Request;

class TrackUTMParametersMiddleware
{
    protected UTMBag $UTMBag;

    public function __construct(UTMBag $UTMBag)
    {
        $this->UTMBag = $UTMBag;
    }

    /**
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->UTMBag->putFromRequest($request);

        return $next($request);
    }
}
