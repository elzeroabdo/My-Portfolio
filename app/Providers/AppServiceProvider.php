<?php

namespace App\Providers;

use App\Models\Info;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // set me variable to the view for all info model
        view()->composer('*', function ($view) {
            $view->with('me', Info::first());
        });
    }
}
