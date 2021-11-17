<?php

namespace GoSafer\Sql\Query;

use RuntimeException;

class Select extends Table
{
    protected $table;
    private $columns;
    private Where $where;

    public function __construct($table = null, array $columns = null)
    {
        $this->table = $table;
        $this->select($columns);
        $this->where = new Where;
    }

    public function part() : string
    {
        return 'SELECT';
    }
    
    public function build() : string
    {
        $sqlSelect = $this->buildSelect();
        $sqlWhere = $this->buildWhere();
        $sql = $sqlSelect.' WHERE '.$sqlWhere;
        return empty($sqlWhere) ? $sqlSelect : $sql;
    }

    public function buildSelect() : string
    {
        $columns = '*';
        $part = $this->part();
        if(is_string($this->columns)) {
            $columns = $this->columns;
        } else if(is_array($this->columns)) {
            $columns = implode(', ', $this->columns);
        }
        return "$part $columns FROM $this->table";
    }

    public function buildWhere() : string
    {
        return $this->where->build();
    }

    public function select(array $columns = null)
    {
        $this->columns = $columns == null ? '*' : $columns;
        return $this;
    }

    public function where(...$args)
    {
        call_user_func_array(array($this->where, 'where'), $args);
    }
}