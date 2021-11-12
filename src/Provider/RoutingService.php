<?php

namespace GoSafer\Provider;

use GoSafer\Routing\Router;

class RoutingService extends Service
{
    public function register()
    {
        $this->app->bind('router', new Router($this->app));
    }

    public function boot()
    {
        require_once($this->app->path('routes').'/web.php');
        require_once($this->app->path('routes').'/api.php');
    }
}