<?php

namespace Amkr\Laravel\Guzzle;

use Amkr\Laravel\Guzzle\Exceptions\ConfigurationMissingException;
use GuzzleHttp\Client;

class Factory
{

    private $config;

    public function __construct(array $config) {
        $this->config = $config;
    }

    public function client($name = 'default') {
        if (isset($this->config[$name])) {
            return new Client($this->config[$name]);
        } else {
            throw new ConfigurationMissingException('Could not find configuration name "'.$name.'"');
        }
    }

    public function __call($method, $parameters) {
        return call_user_func_array([$this->client(), $method], $parameters);
    }

}
