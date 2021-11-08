<?php

namespace GoSafer\Provider;

use GoSafer\App\Application;

class Service implements ServiceInterface{
    protected $app;
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
    public function register()
    {

    }

    public function boot()
    {
        
    }
}