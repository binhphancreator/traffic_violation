<?php

namespace GoSafer\Http;

class RedirectResponse extends BaseResponse
{
    public function render()
    {
        
    }

    public function header()
    {
        header('Location: '.$this->response);
    }

    public function code()
    {
        http_response_code($this->code);
    }
}