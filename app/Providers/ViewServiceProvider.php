<?php

namespace App\Providers;

// use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        View::composer(
//            '*', 'App\Http\View\Composers\ViewComposer'
//        );
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
