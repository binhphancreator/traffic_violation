<?php

namespace GoSafer\Provider;

use GoSafer\App\Session;

class SessionService extends Service
{
    public function register()
    {
        ini_set('session.save_path', $this->app->path('base').'/storage/session');
        ini_set('session.gc_maxlifetime', 57600); 
        ini_set('session.cookie_lifetime', 57600);
        ini_set('session.cache_expire', 960);
        session_start();
        $this->app->bind('session', new Session);
    }

    public function boot()
    {
        
    }
}