<?php

if (!function_exists('getGeolocation')) {
    /**
     * Get geolocation of user from IPAPI service.
     */
    function getGeolocation(string $ip): ?string
    {
        try {
            $client = new GuzzleHttp\Client([
                'base_uri' => config('services.ipapi.geo_endpoint'),
            ]);

            $response = json_decode($client->request('GET', $ip, [
                'query' => [
                    'api-key' => config('services.ipapi.secret')
                ],
            ])->getBody());

            return is_object($response) ? $response->country_code : null;
        } catch (\GuzzleHttp\Exception\ClientException $exception) {
            return null;
        }
    }
}

if (!function_exists('getPublicIp')) {
    /**
     * Get public IP of user.
     */
    function getPublicIp(): string
    {
        $remoteAddr = request()->server('REMOTE_ADDR');
        $httpClientIp = request()->server('HTTP_CLIENT_IP');
        $httpCfConnectingIp = request()->server('HTTP_CF_CONNECTING_IP');

        if ($httpCfConnectingIp) {
            $remoteAddr = $httpCfConnectingIp;
            $httpClientIp = $httpCfConnectingIp;
        }

        $client = $httpClientIp;
        $forward = request()->server('HTTP_X_FORWARDED_FOR');

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            return $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            return $forward;
        }

        return $remoteAddr;
    }
}
