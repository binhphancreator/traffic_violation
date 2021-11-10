<?php

namespace GoSafer\Http;

class Request 
{
    private array $server;
    private array $input;
    private function __construct(array $server)
    {
        $this->server = $server;
        $this->explodeQuery();
    }

    private function explodeQuery(){
        $query = $this->query();
        $query = explode('&', $query);
        foreach ( $query as $data ) {
            $data = explode('=', $data);
            $this->input[$data[0]] = $data[1];
        }
    }

    public static function capture()
    {
        return new Request($_ENV);
    }

    public function input($key) {
        return $this->input[$key];
    }

    public function method() {
        return $this->server['REQUEST_METHOD'];
    }

    public function query() {
        return $this->server['QUERY_STRING'];
    }

    public function url() {
        return $this->server['REQUEST_URI'];
    }

    public function all() {
        return $this->input;
    }

    public function scheme() {
        return $this->server['REQUEST_SCHEME'];
    }

    public function host() {
        return $this->server['HTTP_HOST'];
    }
}