<?php

namespace GoSafer\Sql\Query;

class Delete extends Table
{
    private Where $where;

    public function __construct($table)
    {
        $this->table = $table;
        $this->where = new Where;
    }

    public function where(...$args)
    {
        call_user_func_array(array($this->where, 'where'), $args);
    }

    public function part() : string
    {
        return 'DELETE FROM';
    }

    public function build() : string
    {
        $part = $this->part();
        $where = $this->buildWhere();
        $table = $this->table;
        return empty($where) ? "$part $table" : "$part $table WHERE $where"; 
    }

    private function buildWhere() : string
    {
        return $this->where->build();
    }
}