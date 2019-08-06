<?php

if (!function_exists('getGeolocation')) {
    function getGeolocation($ip)
    {
        $url = config('services.ipapi.geo_endpoint') . '/' . $ip . '?api-key=' . config('services.ipapi.secret');
        if (!$response = @file_get_contents($url)) {
            return null;
        } else {
            $response = json_decode($response);

            return is_object($response) ? $response->country_code : null;
        }
    }
}

if (!function_exists('getPublicIp')) {
    function getPublicIp()
    {
        return file_get_contents(config('services.ipapi.endpoint'));
    }
}
