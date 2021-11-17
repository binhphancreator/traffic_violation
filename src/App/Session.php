<?php

namespace GoSafer\App;

class Session 
{
    private array $old;
    public function __construct()
    {
        $this->old = $_SESSION['flash'] ?? [];
        $_SESSION['flash'] = array();
    }
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

    public function flash($array)
    {
        $_SESSION['flash'] = array_merge($_SESSION['flash'], $array);
    }

    public function old($key, $default = null)
    {
        return $this->old[$key] ?? $default;
    }
}