<?php

namespace GoSafer\Model;

use GoSafer\Database\Connector;
use GoSafer\Sql\Builder\QueryBuilder;

abstract class Model 
{
    protected $table;
    protected $primaryKey = 'id';
    private Connector $connector;
    private QueryBuilder $builder;

    public function __construct()
    {
        $this->connector = app('connector');
        $this->builder = new QueryBuilder();
    }

    public function all()
    {
        $query = $this->builder->select($this->table)->get();
        return $this->connector->query($query);
    }
}