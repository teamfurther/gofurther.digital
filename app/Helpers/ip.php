<?php

if (!function_exists('getGeolocation')) {
    /**
     * Get geolocation of user from IPAPI service.
     */
    function getGeolocation(string $ip): ?string
    {
        $url = config('services.ipapi.geo_endpoint')
            . '/'
            . $ip
            . '?api-key='
            . config('services.ipapi.secret');

        $response = @file_get_contents($url);

        if (!$response) {
            return null;
        }

        $response = json_decode($response);

        return is_object($response) ? $response->country_code : null;
    }
}

if (!function_exists('getPublicIp')) {
    /**
     * Get public IP of user.
     *
     * @return mixed|string
     */
    function getPublicIp()
    {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }
}
