<?php

use GoSafer\App\Auth;
use GoSafer\App\Session;
use GoSafer\Renderer\View;
use GoSafer\Routing\Router;

function app($name)
{
    return GoSafer\App\Application::$app->make($name);
}

function env($key, $default)
{
    return app('env')->env($key, $default);
}

function route() : Router
{
    return app('router');
}

function view($name,array $data = null)
{
    return View::make($name, $data);
}

function session() : Session
{
    return app('session');
}

function auth() : Auth
{
    return app('auth');
}