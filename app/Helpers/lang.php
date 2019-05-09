<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getLang')) {
    function getLang()
    {
        return app()->getLocale();
    }
}

if (!function_exists('getPreferredLang')) {
    function getPreferredLang()
    {
        $ip = getPublicIp();
        $location = getGeolocation($ip);

        if ($location) {
            switch ($location->country) {
                case 'HU':
                    return 'hu';
                    break;
                default:
                    return config('app.locale');
            }
        }

        // return default locale
        return config('app.locale');
    }
}

if (!function_exists('isLang')) {
    function isLang($lang)
    {
        return app()->isLocale($lang);
    }
}

if (!function_exists('localizedRoute')) {
    function localizedRoute($name, $parameters = [], $absolute = true, $lang = null)
    {
        $lang = $lang ?? config('app.locale');

        return app('url')->route($lang . '.' . $name, $parameters, $absolute);
    }
}

if (!function_exists('setLang')) {
    function setLang($lang)
    {
        return app()->setLocale($lang);
    }
}

if (!function_exists('switchLang')) {
    function switchLang($lang)
    {
        if (!request()->route()) {
            return null;
        }

        $route = substr(request()->route()->getName(), 3);

        return Route::has($lang . '.' . $route) ?
            localizedRoute($route, request()->route()->parameters(), true, $lang) :
            null;
    }
}
