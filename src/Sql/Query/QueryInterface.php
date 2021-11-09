<?php

namespace GoSafer\Sql\Query;

interface QueryInterface
{
    public function build() : string;
}