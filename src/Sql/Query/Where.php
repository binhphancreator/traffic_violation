<?php

namespace GoSafer\Sql\Query;

use RuntimeException;

class Where extends AbstractBaseQuery
{
    private array $conditions = [];
    public function build(): string
    {
        $sql = '';
        if(!count($this->conditions)) return '';
        foreach($this->conditions as $index => $condition)
        {
            $operator = $condition[3];
            if($index > 0) 
                $sql = $sql." $operator ";
            $value = is_string($condition[2]) ? "'$condition[2]'" : $condition[2];
            $sql = $sql."$condition[0] $condition[1] $value";
        }
        return $sql;
    }

    public function where(...$args)
    {
        $nargs = count($args);
        switch($nargs)
        {
            case 2:
                $this->conditions[] = array($args[0], '=', $args[1], 'AND');
                break;
            case 3:
                $this->conditions[] = array($args[0], $args[1], $args[2], 'AND'); 
                break;
            default: 
                throw new RuntimeException('Argument is not valid');
                break;
        }
    }

    public function orWhere(...$args)
    {
        $nargs = count($args);
        switch($nargs)
        {
            case 2:
                $this->conditions[] = array($args[0], '=', $args[1], 'OR');
                break;
            case 3:
                $this->conditions[] = array($args[0], $args[1], $args[2], 'OR'); 
                break;
            default: 
                throw new RuntimeException('Argument is not valid');
                break;
        }
    }
}
