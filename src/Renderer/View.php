<?php

namespace GoSafer\Renderer;

use GoSafer\App\Application;
use RuntimeException;

class View implements BaseView
{
    private Application $app;
    private $name;
    private $data;

    private function __construct(Application $app,$name, $data)
    {
        $this->app = $app;
        $this->data = $data;
        $this->name = $name;
    }

    public static function make($name, $data = null)
    {
        return new View(app('app'), $name, $data);
    }

    public function data($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function render()
    {
        if(!file_exists($this->app->path('resource.view')."/$this->name.gosafer.php"))
            throw new RuntimeException("The view is not exist");
        extract($this->data);
        require_once ($this->app->path('resource.view')."/$this->name.gosafer.php");
    }
}