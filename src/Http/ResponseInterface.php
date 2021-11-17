<?php

namespace GoSafer\Http;

interface ResponseInterface
{
    public function render();
    public function code();
    public function header();
}