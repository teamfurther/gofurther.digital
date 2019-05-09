<?php

if (!function_exists('getGeolocation')) {
    function getGeolocation($ip)
    {
        $url = config('services.ipify.geo_endpoint') . '?apiKey=' . config('services.ipify.secret') . '&ipAddress=' . $ip;
        $response = json_decode(file_get_contents($url));

        return is_object($response) ? $response->location : null;
    }
}

if (!function_exists('getPublicIp')) {
    function getPublicIp()
    {
        return file_get_contents(config('services.ipify.endpoint'));
    }
}
