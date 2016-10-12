Guzzle Package for Laravel 5
============================
This is a simple Laravel Service Provider and Facade to access GuzzleHttp/Client, using configuration from a config file.

Installation
------------

To install the PHP client library using Composer:

    composer require amkr/laravel-guzzle-provider

Then add `Amkr\Laravel\Guzzle\Providers\GuzzleServiceProvider` to the providers array in your `config/app.php`.

    Amkr\Laravel\Guzzle\Providers\GuzzleServiceProvider::class,

Add the Facade to the alias array in your `app/config.php`:

    'Guzzle' => Amkr\Laravel\Guzzle\Facades\Guzzle::class,

Configuration
-------------

You can use `artisan vendor:publish` to copy the distribution configuration file to your app's config directory:

    php artisan vendor:publish

Adjust your configuration in `config/guzzle.php`:

    'default' => [
        'base_uri' => 'http://localhost',
        'verify' => '/path/to/ca-chain.pem',
    ],

Usage
-----

You can access GuzzleHttp\Client through the Guzzle facade:

    Guzzle::post('url', []);

Or you can specify to use a non-default configuration name by using the `client()` method:

    Guzzle::client('my-config')->post('url', []);
