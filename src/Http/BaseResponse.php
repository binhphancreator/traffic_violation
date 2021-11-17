<?php

namespace GoSafer\Http;

class BaseResponse implements ResponseInterface
{
    protected $response;
    protected $code;
    public function __construct($code = 200, $response = null)
    {
        $this->response = $response;
        $this->code = $code;
    }

    public function render()
    {
        echo $this->response;
    }

    public function code()
    {
        http_response_code($this->code);
    }

    public function header()
    {
        header('Content-Type: text/html; charset=utf-8');
    }

    public function with($data)
    {
        session()->flash($data);
        return $this;
    }
}