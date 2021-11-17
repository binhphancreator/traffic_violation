<?php

namespace GoSafer\Sql\Query;

class Table extends AbstractBaseQuery
{
    protected $table;
    
    public function part(): string
    {
        return 'TABLE';
    }

    public function table()
    {
        return $this->table;
    }

    public function build(): string
    {
        return $this->table;
    }
}