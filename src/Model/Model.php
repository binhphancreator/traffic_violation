<?php

namespace GoSafer\Model;

use GoSafer\Database\Connector;
use GoSafer\Sql\Builder\QueryBuilder;
use RuntimeException;

abstract class Model 
{
    protected $table;
    protected $primaryKey = 'id';
    protected array $data;
    private Connector $connector;
    private QueryBuilder $builder;
    private $single = false;
    private $updated = [];

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

    public function __set($key, $value)
    {
        $this->updated[$key] = $value;
        $this->data[$key] = $value;
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

    public function create(array $data = null)
    {
        $query = $this->builder->insert($this->table, $data)->get();
        $this->connector->exec($query);
        $id = $this->connector->lastInsertId();
        return $this->find($id);
    }

    public function delete()
    {
        if(!isset($this->data)) throw new RuntimeException('The data of model is null');
        $query = $this->builder->delete($this->table)->where($this->primaryKey, $this->data[$this->primaryKey])->get();
        $this->connector->exec($query);
        return $this;
    }

    public function update(array $data = null)
    {
        $this->updated = $data ?? $this->updated;
        if(!count($this->updated)) return;
        $query = $this->builder->update($this->table, $this->updated)->where($this->primaryKey, $this->data[$this->primaryKey])->get();
        $this->connector->exec($query);
        $this->reload();
        return $this;
    }

    private function reload()
    {
        foreach($this->updated as $key => $value)
        {
            $this->data[$key] = $value;
        }
        $this->updated = [];
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