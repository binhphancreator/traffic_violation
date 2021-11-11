<?php

namespace GoSafer\App;

class Application {
    private string $basePath = '';
    public static Application $app;
    private $instances = array();
    private $services = [
        \GoSafer\Provider\EnviromentService::class,
        \GoSafer\Provider\HelperService::class,
        \GoSafer\Provider\RoutingService::class,
        \GoSafer\Provider\HttpService::class,
    ];
    public function __construct(string $basePath)
    {
        self::$app = $this;
        $this->basePath = $basePath;
        $this->bindingService();
        $this->register();
        $this->boot();
    }

    public function getBasePath()
    {
        return $this->basePath;
    }

    public function path()
    {

    }

    public function bindingService()
    {
        foreach($this->services as $service)
        {
            $this->bind($service, new $service($this));
        }
    }

    public function register()
    {
        foreach($this->services as $service)
        {
            $this->make($service)->register();
        }
    }

    public function boot()
    {
        foreach($this->services as $service)
        {
            $this->make($service)->boot();
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

    public function close()
    {
        
    }
}