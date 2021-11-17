<?php

namespace GoSafer\Sql\Query;

class Update extends Table
{
    protected Where $where;
    private array $data;

    public function __construct($table, array $data)
    {
        $this->table = $table;
        $this->where = new Where;
        $this->data= $data;
    }

    public function part() : string
    {
        return 'UPDATE';
    }

    public function build() : string
    {
        $part = $this->part();
        $where = $this->buildWhere();
        $sets = $this->buildSet();
        $table = $this->table;
        return empty($where) ? "$part $table SET $sets" : "$part $table SET $sets WHERE $where";
    }

    public function where(...$args)
    {
        call_user_func_array(array($this->where, 'where'), $args);
    }

    private function buildWhere() : string
    {
        return $this->where->build();
    }

    private function buildSet()
    {
        $sets = [];
        foreach($this->data as $column => $value)
        {
            $value_quote = $this->quote($value);
            $sets[] = "$column = $value_quote";
        }
        return implode(', ', $sets);
    }
}