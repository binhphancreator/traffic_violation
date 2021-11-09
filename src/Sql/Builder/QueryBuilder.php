<?php

namespace GoSafer\Sql\Builder;

use GoSafer\Sql\Query\QueryFactory;
use GoSafer\Sql\Query\QueryInterface;
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
        return $this->injectBuilder(QueryFactory::createSelect($table, $columns));
    }

    public function get()
    {
        if($this->query == null) throw new RuntimeException('Query Instance has not been intialize');
        return $this->query->build();
    }
}