<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            $this->mapRedirects();

            $this->mapApiRoutes();

            $this->mapFrontRoutes();
        });
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }

    protected function mapFrontRoutes(): void
    {
        Route::middleware(['utm', 'lang', 'web'])
            ->group(base_path('routes/front.php'));
    }

    protected function mapRedirects(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/redirects.php'));
    }
}
