<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getLang')) {
    /**
     * Get currently set language locale.
     */
    function getLang(): string
    {
        return app()->getLocale();
    }
}

if (!function_exists('getPreferredLang')) {
    /**
     * Get suspected preferred language
     * of the user, based on geolocation.
     */
    function getPreferredLang(): string
    {
        $ip = getPublicIp();
        $location = getGeolocation($ip);

        if ($location) {
            switch ($location) {
                case 'HU':
                    return 'hu';
                default:
                    return config('app.locale');
            }
        }

        // return default locale
        return config('app.locale');
    }
}

if (!function_exists('handleSwitchLangExceptions')) {
    /**
     * Handle exceptions in route mapping.
     *
     * @return array<string>
     */
    function handleRouteMappingExceptions(string $route, string $lang): array
    {
        $parameters = request()->route()->parameters();

        switch ($route) {
            case 'blog.show':
                $parameters['slug'] = routeMappingLookup('blog', $parameters['slug'], $lang);

                break;
            case 'projects.show':
                $parameters['slug'] = routeMappingLookup('projects', $parameters['slug'], $lang);

                break;
        }

        return $parameters;
    }

}

if (!function_exists('isLang')) {
    /**
     * Check if current language matches parameters.
     */
    function isLang(string $lang): bool
    {
        return app()->isLocale($lang);
    }
}

if (!function_exists('localizedRoute')) {
    /**
     * Get localized version of the route.
     *
     * @param array<string> $parameters
     */
    function localizedRoute(
        string $name,
        array $parameters = [],
        bool $absolute = true,
        ?string $lang = null
    ): string
    {
        $lang = $lang ?? config('app.locale');

        return app('url')->route($lang . '.' . $name, $parameters, $absolute);
    }
}

if (!function_exists('setLang')) {
    /**
     * Set the language locale.
     */
    function setLang(string $lang): void
    {
        app()->setLocale($lang);
    }
}

if (!function_exists('routeMappingLookup')) {
    /**
     * Lookup localized version of route
     * from the route mapping table.
     */
    function routeMappingLookup(string $key, string $slug, string $targetLang): string
    {
        $array = config('route-mapping.' . $key);
        $currentLang = app()->getLocale();

        $resultKey = array_search($slug, array_column($array, $currentLang));

        return $resultKey !== false ? $array[$resultKey][$targetLang] : null;
    }
}

if (!function_exists('switchLang')) {
    /**
     * Generates language locale switcher.
     *
     * @return mixed|null
     */
    function switchLang(string $lang)
    {
        if (!request()->route()) {
            return null;
        }

        $route = substr(request()->route()->getName(), 3);

        $parameters = handleRouteMappingExceptions($route, $lang);

        return Route::has($lang . '.' . $route)
            ? localizedRoute($route, $parameters, true, $lang)
            : null;
    }
}
