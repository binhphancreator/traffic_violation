<?php

namespace GoSafer\Sql\Query;

abstract class AbstractBaseQuery implements QueryInterface
{
    abstract public function build() : string;

    protected function quote($value)
    {
        if(is_string($value)) return "'$value'";
        return $value;
    }
}