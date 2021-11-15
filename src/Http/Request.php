<?php

namespace GoSafer\Http;

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
        $query = $this->query();
        if(!$query) return;
        $query = explode('&', $query);
        foreach ( $query as $data ) {
            $data = explode('=', $data);
            $this->input[$data[0]] = $data[1];
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
}