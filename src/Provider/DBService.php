<?php

namespace GoSafer\Provider;

use GoSafer\Database\Connector;

class DBService extends Service
{
    public function register()
    {
        
    }

    public function boot()
    {
        $this->app->bind('connector', new Connector($this->getParams()));
    }

    public function getParams()
    {
        $params = [
            'host' => env('DB_HOST', 'localhost'),
            'user' => env('DB_USER', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'schema' => env('DB_SCHEMA', 'gosafer'),
        ];
        return $params;
    }
}