<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PrivateContentMiddleware
{
    protected array $privateContent;

    protected Session $session;

    public function __construct(Session $session)
    {
        $this->privateContent = $this->buildPrivateContentUrls(config('private-content.routes'));
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @return Closure|RedirectResponse|Redirector
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->session->has(config('private-content.session_key'))) {
            if (in_array($request->url(), $this->privateContent)) {
                return redirect()->route(getLang() . '.private-content', ['referer' => $request->url()]);
            }
        }

        return $next($request);
    }

    /**
     * @return array<string>
     */
    private function buildPrivateContentUrls(array $routes): array
    {
        $privateContent = [];

        foreach ($routes as $name => $parameters) {
            $privateContent[] = localizedRoute($name, $parameters);
        }

        return $privateContent;
    }
}
