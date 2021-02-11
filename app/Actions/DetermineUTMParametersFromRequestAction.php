<?php

namespace App\Actions;

use Illuminate\Http\Request;

class DetermineUTMParametersFromRequestAction
{
    /**
     * @return array<string>
     */
    public function execute(Request $request): array
    {
        return [
            'utm_source' => $request->get('utm_source'),
            'utm_medium' => $request->get('utm_medium'),
            'utm_campaign' => $request->get('utm_campaign'),
            'utm_term' => $request->get('utm_term'),
            'utm_content' => $request->get('utm_content'),
            'entry' => $request->getUri(),
            'referer' => $this->isCrossOrigin($request) ? $request->header('referer') : null,
        ];
    }

    private function isCrossOrigin(Request $request): bool
    {
        $refererHost = $this->makeHost($request->header('referer', ''));

        return $refererHost !== $request->getHost();
    }

    private function makeHost(string $url): ?string
    {
        return parse_url($url, PHP_URL_HOST);
    }
}
