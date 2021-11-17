<?php

namespace GoSafer\Sql\Query;

class Insert extends AbstractBaseQuery
{
    private array $data;
    public function __construct($table, $data)
    {
        $this->table = $table;
        $this->data = $data ?? [];
    }

    public function part() : string
    {
        return 'INSERT INTO';
    }

    public function build() : string
    {
        $part = $this->part();
        $table = $this->table;
        $columns = $this->buildColumn();
        $values = $this->buildValue();
        $sql = "$part $table $columns VALUES $values";
        return $sql;
    }

    private function buildColumn()
    {
        $columns = array_keys($this->data);
        $columns = implode(', ', $columns);
        return "($columns)";
    }

    private function buildValue()
    {
        $values = array_values($this->data);
        $values = array_map(function($value) {
            if(is_string($value)) return "'$value'";
            return $value;
        }, $values);
        $values = implode(', ', $values);
        return "($values)";
    }
}