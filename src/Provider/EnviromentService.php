<?php

namespace GoSafer\Provider;

use GoSafer\App\Enviroment;

class EnviromentService extends Service
{
    public function register()
    {
        $this->app->bind('env', new Enviroment($this->app));
    }

    public function boot()
    {

    }
}