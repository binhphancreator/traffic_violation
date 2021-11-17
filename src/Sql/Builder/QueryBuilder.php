<?php

namespace GoSafer\Sql\Builder;

use GoSafer\Sql\Query\QueryFactory;
use GoSafer\Sql\Query\QueryInterface;
use GoSafer\Sql\Query\Select;
use RuntimeException;

class QueryBuilder implements BuilderInterface
{
    protected QueryInterface $query;

    protected function injectBuilder(QueryInterface $query)
    {
        $this->query = $query;
    }

    public function select($table = null, array $columns = null)
    {
        $this->injectBuilder(QueryFactory::createSelect($table, $columns));
        return $this;
    }

    public function insert($table = null, array $data = null)
    {
        $this->injectBuilder(QueryFactory::createInsert($table, $data));
        return $this;
    }

    public function get()
    {
        if($this->query == null) throw new RuntimeException('Query Instance has not been intialize');
        return $this->query->build();
    }

    public function __call($method, $arguments)
    {
        switch($method)
        {
            case 'where':
                call_user_func_array(array($this->query, $method), $arguments);
                return $this;
                break;
            default:
                throw new RuntimeException('Method not found');
                break;
        }
    }
}