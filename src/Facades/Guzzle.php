<?php

namespace Amkr\Laravel\Guzzle\Facades;

use Illuminate\Support\Facades\Facade;

class Guzzle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'amkr.laravel.guzzle.factory';
    }
}
