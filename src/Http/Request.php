<?php

namespace GoSafer\Http;

use GoSafer\Storage\FileUpload;
use RuntimeException;

class Request 
{
    private array $server;
    private array $input = [];
    private function __construct(array $server)
    {
        $this->server = $server;
        $this->explodeQuery();
    }

    private function explodeQuery(){
        $method = $this->method();
        switch($method)
        {
            case 'GET':
                $this->input = $_GET;
                break;
            case 'POST':
                $this->input = $_POST;
                break;
            default:
                break;
        }
    }

    public static function capture()
    {
        return new Request($_SERVER);
    }

    public function input($key) {
        return $this->input[$key];
    }

    public function method() {
        return $this->server['REQUEST_METHOD'] ?? null;
    }

    public function query() {
        return $this->server['QUERY_STRING'] ?? null;
    }

    public function url() {
        $uri = $this->server['REQUEST_URI'];
        return $uri ? explode('?', $uri)[0] : null;
    }

    public function all() {
        return $this->input;
    }

    public function scheme() {
        return $this->server['REQUEST_SCHEME'] ?? null;
    }

    public function host() {
        return $this->server['HTTP_HOST'] ?? null;
    }

    public function __get($key)
    {
        return $this->input[$key] ?? null;
    }

    public function file($file) : FileUpload
    {
        if(!isset($_FILES[$file])) return null;
        return new FileUpload($_FILES[$file]);
    }
}