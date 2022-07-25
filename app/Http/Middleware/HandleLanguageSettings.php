<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HandleLanguageSettings
{
    /**
     * Exclude these routes from middleware.
     *
     * @var array
     */
    protected $except = [
        'cover/generate'
    ];

    /**
     * Handle an incoming request.
     *
     * @return Closure|RedirectResponse|Redirector
     */
    public function handle(Request $request, Closure $next)
    {
        foreach ($this->except as $excluded) {
            if ($request->path() === $excluded) {
                return  $next($request);
            }
        }

        $prefix = $request->route()->getPrefix();
        if ($prefix) {
            $prefix = trim($prefix, '/');
        }

        $lang = $prefix ?: getPreferredLang();

        if (!isLang($lang)) {
            setLang($lang);
        }

        if ($lang !== $prefix) {
            return redirect('/' . $lang);
        }

        return $next($request);
    }
}
