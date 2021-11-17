<?php

namespace GoSafer\App;

class Application {
    public static Application $app;
    private $instances = array();
    private $path = array();
    private $services = [
        \GoSafer\Provider\EnviromentService::class,
        \GoSafer\Provider\HelperService::class,
        \GoSafer\Provider\RoutingService::class,
        \GoSafer\Provider\HttpService::class,
        \GoSafer\Provider\DBService::class,
        \GoSafer\Provider\SessionService::class,
        \GoSafer\Provider\AuthService::class,
    ];
    public function __construct(string $basePath)
    {
        $this->bindingApplication();
        $this->bindingGlobalPath($basePath);
        $this->bindingService();
    }

    public function bindingApplication()
    {
        self::$app = $this;
        $this->bind('app', $this);
    }

    public function bindingGlobalPath($basePath)
    {
        $this->path['base'] = $basePath;
        $this->path['routes'] = $basePath."/routes";
        $this->path['resource'] = $basePath."/resource";
        $this->path['resource.view'] = $basePath."/resource/view";
    }

    public function path($key, $default = null)
    {
        return $this->path[$key] ?? $default;
    }

    public function bindingService()
    {
        foreach($this->services as $service)
        {
            $this->bind($service, new $service($this));
        }
        $this->register();
        $this->boot();
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