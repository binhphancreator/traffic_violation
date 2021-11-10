<?php

namespace GoSafer\Provider;

class HelperService extends Service
{
    public function register()
    {
        require_once($this->app->getBasePath().'/src/helper.php');
    }

    public function boot()
    {

    }
}