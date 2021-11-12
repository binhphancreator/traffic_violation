<?php

namespace GoSafer\Provider;

class HelperService extends Service
{
    public function register()
    {
        
    }

    public function boot()
    {
        require_once($this->app->path('base').'/src/helper.php');
    }
}