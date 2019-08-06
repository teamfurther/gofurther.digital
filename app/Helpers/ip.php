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
        if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
                $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
}
