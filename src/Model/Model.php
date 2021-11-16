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
    private $single = false;

    public function __construct()
    {
        $this->connector = app('connector');
        $this->builder = new QueryBuilder();
        $this->builder->select($this->table);
    }

    public function __get($key)
    {
        return $this->data[$key] ?? null;
    }

    public function all()
    {
        $query = $this->builder->select($this->table)->get();
        return $this->connector->query($query);
    }

    public function find($id)
    {
        $this->single = true;
        $query = $this->builder->select($this->table)->where($this->primaryKey, $id)->get();
        $this->data = $this->connector->query($query);
        if(count($this->data) >= 1) {
            $this->data = $this->data[0];
            return $this;
        }
        return null;
    }

    public function where(...$args)
    {
        $this->single = false;
        call_user_func_array(array($this->builder, 'where'), $args);
        return $this;
    }

    public function first()
    {
        if(!isset($this->data))
            $this->query();
        if(count($this->data) >= 1) {
            $this->data = $this->data[0];
            return $this;
        }
        return null;
    }

    public function query()
    {
        $query = $this->builder->get();
        $this->data = $this->connector->query($query);
    }

    public function get()
    {
        if($this->single) return $this->data;
        $this->query();
        return $this->data;
    }
}