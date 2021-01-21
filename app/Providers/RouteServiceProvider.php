<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function map(): void
    {
        $this->mapRedirects();

        $this->mapApiRoutes();

        $this->mapFrontRoutes();
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
