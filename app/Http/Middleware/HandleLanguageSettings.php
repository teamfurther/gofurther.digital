<?php

namespace App\Http\Middleware;

use Closure;

class HandleLanguageSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $prefix = $request->route()->getPrefix();
        if ($prefix) {
            $prefix = trim($prefix, '/');
        }

        $lang = $prefix ?? getPreferredLang();

        if (!isLang($lang)) {
            setLang($lang);
        }

        if ($lang != $prefix) {
            return redirect('/' . $lang);
        }

        return $next($request);
    }
}
