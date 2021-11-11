<?php

namespace GoSafer\Http;

class ExceptionResponse extends BaseResponse
{
    public function header()
    {
        header('Content-Type: text/html; charset=utf-8');
    }

    public function render()
    {
        echo strval($this->code);
    }
}