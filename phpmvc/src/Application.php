<?php

namespace App;

class Application
{

    public function __construct()
    {
        $this->registerProviders();
    }

    public function registerProviders()
    {
        $providers = config('providers');

        foreach ($providers as $provider) {
            (new $provider)->register();
        }
    }

    public function bootProviders()
    {
        $providers = config('providers');

        foreach ($providers as $provider) {
            (new $provider)->boot();
        }
    }

    public function run()
    {
        $this->bootProviders();
    }
}