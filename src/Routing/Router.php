<?php

namespace GoSafer\Routing;

use GoSafer\App\Application;
use GoSafer\Http\Request;

class Router 
{
    private array $routes;
    private Application $app;

    public function __construct(Application $app)
    {
        $this->routes = array();
        $this->app = $app;
    }

    public function get($url, $callback){
        $route = Route::get($url, $callback);
        $this->addRoute($route);
    }

    public function post($url, $callback){
        $route = Route::post($url, $callback);
        $this->addRoute($route);
    }

    public function put($url, $callback){
        $route = Route::put($url, $callback);
        $this->addRoute($route);
    }

    public function delete($url, $callback){
        $route = Route::delete($url, $callback);
        $this->addRoute($route);
    }

    private function addRoute(Route $route) {
        $this->app->bind($route->id(), $route);
        $this->routes[$route->id()] = $route;
    }

    public function dispatch($url, $method) {
        $id = "$url*$method";
        if(!isset($this->routes[$id])) return null;
        return $this->routes[$id]->response($this->app->make('request'));
    }
}