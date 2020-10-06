<?php

namespace App\Providers;

use App\MyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }

        app()->singleton(MyService::class, function ($app) {
            $myService = new MyService();
            $myService->setId(0);
            return $myService;
        });
    }
}
