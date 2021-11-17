<?php

namespace GoSafer\Sql\Query;

abstract class AbstractBaseQuery implements QueryInterface
{
    abstract public function build() : string;
}