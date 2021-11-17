<?php

namespace GoSafer\Http;

class JsonResponse extends BaseResponse
{
    public function render()
    {
        echo json_encode($this->response);
    }

    public function header()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function code()
    {
        http_response_code($this->code);
    }
}