<?php

namespace GoSafer\App;

class Application {
    private string $basePath = '';
    public static Application $app;
    private $instances = array();
    private $services = [
        \GoSafer\Provider\EnviromentService::class,
        \GoSafer\Provider\HelperService::class,
    ];
    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
        $this->bootService();
        self::$app = $this;
    }

    public function getBasePath()
    {
        return $this->basePath;
    }

    public function bootService()
    {
        foreach($this->services as $service)
        {
            $service = new $service($this);
            $service->register();
            $service->boot();
        }
    }

    public function bind($name, $object)
    {
        $this->instances[$name] = $object;
    }

    public function make($name)
    {
        return $this->instances[$name];
    }
}