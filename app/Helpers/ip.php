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
        if (
            array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)
            && !$_SERVER['HTTP_X_FORWARDED_FOR']
        ) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            }

            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $_SERVER['REMOTE_ADDR'];
    }
}
