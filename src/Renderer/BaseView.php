<?php

namespace GoSafer\Renderer;

interface BaseView
{
    public function render();
    public function data($key, $default = null);
}