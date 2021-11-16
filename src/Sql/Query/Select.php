<?php

namespace GoSafer\Sql\Query;

use RuntimeException;

class Select extends Table
{
    protected $table;
    private $columns;
    private $conditions = [];

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
        $sqlSelect = $this->buildSelect();
        $sqlWhere = $this->buildWhere();
        $sql = $sqlSelect.' WHERE '.$sqlWhere;
        return empty($sqlWhere) ? $sqlSelect : $sql;
    }

    public function buildSelect() : string
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

    public function buildWhere() : string
    {
        $sql = '';
        if(!count($this->conditions)) return '';
        foreach($this->conditions as $index => $condition)
        {
            if($index > 0) $sql = $sql." AND ";
            $sql = $sql."$condition[0] $condition[1] '$condition[2]'";
        }
        return $sql;
    }

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function select(array $columns = null)
    {
        $this->columns = $columns == null ? '*' : $columns;
        return $this;
    }

    public function where(...$args)
    {
        $nargs = count($args);
        switch($nargs)
        {
            case 2:
                $this->conditions[] = array($args[0], '=', $args[1]);
                break;
            case 3:
                $this->conditions[] = $args; 
                break;
            case 4: 
                break;
            default: 
                throw new RuntimeException('Argument is not valid');
                break;
        }
    }
}