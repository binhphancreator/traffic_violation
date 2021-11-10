<?php

namespace GoSafer\Sql\Query;

class Select extends Table
{
    protected $table;
    private $columns;

    public function __construct($table = null, array $columns = null)
    {
        $this->setTable($table);
        $this->select($columns);
    }

    public function partName() : string
    {
        return 'SELECT';
    }
    
    public function build() : string
    {
        $columns = '*';
        $partName = $this->partName();
        if(is_string($this->columns)) {
            $columns = $this->columns;
        } else if(is_array($this->columns)) {
            $columns = implode(', ', $this->columns);
        }
        return "$partName $columns FROM $this->table";
    }

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function select(array $columns = null)
    {
        $this->columns = $columns == null ? '*' : $columns;
        return this;
    }
}