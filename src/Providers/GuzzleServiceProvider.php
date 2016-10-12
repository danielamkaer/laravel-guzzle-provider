<?php

namespace Amkr\Laravel\Guzzle\Providers;

use Amkr\Laravel\Guzzle\Factory;
use Illuminate\Support\ServiceProvider;

class GuzzleServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $dist = __DIR__.'/../../dist/';
        $config = $dist.'config.php';
        $this->publishes([
            $config => config_path('guzzle.php'),
        ]);

        $this->mergeConfigFrom($config, 'guzzle');
    }

    public function register()
    {
        $this->app->bind('amkr.laravel.guzzle.factory', function($app) {
            return new Factory(config('guzzle'));
        });
    }

}
