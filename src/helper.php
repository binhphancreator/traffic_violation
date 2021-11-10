<?php

function app($name)
{
    return GoSafer\App\Application::$app->make($name);
}

function env($key, $default)
{
    return app('env')->env($key, $default);
}