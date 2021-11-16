<?php

namespace GoSafer\Provider;

use GoSafer\App\Auth;
use GoSafer\Provider\Service;

class AuthService extends Service
{
    public function register()
    {
        
    }

    public function boot()
    {
        $this->app->bind('auth', new Auth($this->app->make('session')) );
    }
}