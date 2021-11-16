<?php

namespace GoSafer\App;

class Session 
{
    public function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function unset($key)
    {
        unset($_SESSION[$key]);
    }

    public function unsetAll()
    {
        session_unset();
    }
}