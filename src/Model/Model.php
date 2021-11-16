<?php

namespace GoSafer\Model;

use GoSafer\Database\Connector;
use GoSafer\Sql\Builder\QueryBuilder;

abstract class Model 
{
    protected $table;
    protected $primaryKey = 'id';
    protected array $data;
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

    public function find($id)
    {
        $query = $this->builder->select($this->table)->where($this->primaryKey, $id)->get();
        $this->data = $this->connector->query($query);
        return $this;
    }

    public function get()
    {
        return $this->data;
    }
}