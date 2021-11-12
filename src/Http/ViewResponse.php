<?php

namespace GoSafer\Http;

class ViewResponse extends BaseResponse
{
    public function render()
    {
        $this->response->render();
    }

    public function data($key, $default = null)
    {
        return $this->response->data($key, $default);
    }
}