<?php

namespace Revolution\Socialite\Freee;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Revolution\Socialite\Freee\Drivers\FreeeAccountingProvider;

class FreeeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Socialite::extend('freee-accounting', function ($app) {
            $config = $app['config']['services.freee-accounting'];

            return Socialite::buildProvider(FreeeAccountingProvider::class, $config);
        });
    }
}
