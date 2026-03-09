<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        // Make isDark available in ALL views
        View::composer('*', function ($view) {
            $view->with('isDark', request()->cookie('theme') === 'dark');
        });
    }

}
