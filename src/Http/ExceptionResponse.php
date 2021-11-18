<?php

namespace GoSafer\Http;

class ExceptionResponse extends BaseResponse
{
    public function __construct($code = 404, $response = null)
    {
        $this->response = view("errors/".strval($code));
        $this->code = $code;
        $this->code = $code;
    }

    public function header()
    {
        header('Content-Type: text/html; charset=utf-8');
    }

    public function render()
    {
        $this->response->render();
    }
}