<?php

namespace GoSafer\Http;

class BaseResponse implements ResponseInterface
{
    protected $response;
    protected $code;
    public function __construct($code = 200, $response)
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
        
    }
}