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
        app()->singleton(MyService::class, function ($app) {
            $myService = new MyService();
            $myService->setId(0);
            return $myService;
        });
    }
}
