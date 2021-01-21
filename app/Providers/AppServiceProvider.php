<?php

namespace App\Providers;

use App\Actions\DetermineUTMParametersFromRequestAction;
use App\Http\UTMBag;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(UTMBag::class, function ($app) {
            return new UTMBag(
                $app->make(DetermineUTMParametersFromRequestAction::class),
                $app->make(Session::class)
            );
        });
    }
}
