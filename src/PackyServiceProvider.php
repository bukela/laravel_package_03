<?php

namespace Mirko\Packy;

use Illuminate\Support\ServiceProvider;

class PackyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'packy');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
