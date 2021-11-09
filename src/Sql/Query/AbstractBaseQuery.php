<?php

namespace GoSafer\Sql\Query;

abstract class AbstractBaseQuery implements QueryInterface
{
    protected $table;

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = string($table);
        return $this;
    }

    abstract public function build() : string;
}