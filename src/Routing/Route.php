<?php

namespace GoSafer\Routing;

use Closure;
use GoSafer\Http\Request;
use RuntimeException;

class Route 
{
    private string $url;
    private string $method;
    private $callback;

    private function __construct($method, $url, $callback)
    {
        $this->url = $url;
        $this->method = $method;
        $this->callback = $callback;
    }

    public static function get($url, $callback) {
        return new Route('GET', $url, $callback);
    }

    public static function post($url, $callback) {
        return new Route('POST', $url, $callback);
    }

    public static function delete($url, $callback) {
        return new Route('DELETE', $url, $callback);
    }

    public static function put($url, $callback) {
        return new Route('PUT', $url, $callback);
    }

    public static function patch($url, $callback) {
        return new Route('PATCH', $url, $callback);
    }

    public function response(Request $request) {
        if(is_array($this->callback)) {
            if(count($this->callback) != 2) throw new RuntimeException('Route is not valid');
            $controllerName = $this->callback[0];
            $methodName = $this->callback[1];
            return call_user_method_array($methodName, new $controllerName, [$request]);
        }
        else if($this->callback instanceof Closure) {
            return call_user_func_array($this->callback, [$request]);
        }
        else {
            throw new RuntimeException('The callback is not supported');
        }
    }

    public function url() {
        return $this->url;
    }

    public function method() {
        return $this->method;
    }

    public function id() {
        return "$this->url*$this->method";
    }
}