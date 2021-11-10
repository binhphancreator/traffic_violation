<?php

namespace GoSafer\Routing;

class Router 
{
    private array $routes;

    public function __construct()
    {
        $this->routes = array();
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
        $this->routes[$route->id()] = $route;
    }
}