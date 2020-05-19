<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleLanguageSettings
{

    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $prefix = $request->route()->getPrefix();
        if ($prefix) {
            $prefix = trim($prefix, '/');
        }

        $lang = $prefix ?? getPreferredLang();

        if (!isLang($lang)) {
            setLang($lang);
        }

        if ($lang !== $prefix) {
            return redirect('/' . $lang);
        }

        return $next($request);
    }

}
