<?php

namespace GoSafer\Sql\Query;

class Table extends AbstractBaseQuery
{
    public function partName(): string
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