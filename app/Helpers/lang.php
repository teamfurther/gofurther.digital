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
            switch ($location) {
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

if (!function_exists('routeMappingLookup')) {
    function routeMappingLookup($key, $slug, $targetLang)
    {
        $array = config('routeMapping.' . $key);
        $currentLang = app()->getLocale();

        $resultKey = array_search($slug, array_column($array, $currentLang));

        return $resultKey !== false ? $array[$resultKey][$targetLang] : null;
    }
}

if (!function_exists('switchLang')) {
    function switchLang($lang)
    {
        if (!request()->route()) {
            return null;
        }

        $route = substr(request()->route()->getName(), 3);
        $parameters = request()->route()->parameters();

        // handle exceptions
        switch ($route) {
            case 'blog.view':
                $parameters['slug'] = routeMappingLookup('blog', $parameters['slug'], $lang);

                break;
            case 'projects.view':
                $parameters['slug'] = routeMappingLookup('projects', $parameters['slug'], $lang);

                break;
        }

        return Route::has($lang . '.' . $route)
            ? localizedRoute($route, $parameters, true, $lang)
            : null;
    }
}
