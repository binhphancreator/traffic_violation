<?php

namespace GoSafer\Provider;

use GoSafer\Http\Handler;

class HttpService extends Service
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind('http', new Handler($this->app, $this->app->make('router')));
    }
}