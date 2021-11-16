<?php

namespace GoSafer\Provider;

use GoSafer\App\Session;

class SessionService extends Service
{
    public function register()
    {
        session_start();
        $this->app->bind('session', new Session);
    }

    public function boot()
    {
        
    }
}