<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TMDbService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('TMDbService', function ($app) {
            return new TMDbService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
