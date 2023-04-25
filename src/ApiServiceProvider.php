<?php

namespace SlickPay;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/slickpay.php' => config_path('slickpay.php'),
        ], 'slickpay-config');
    }

    public function register()
    {
        //
    }
}