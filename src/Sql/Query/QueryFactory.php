<?php

namespace GoSafer\Sql\Query;

final class QueryFactory
{
    public static function createSelect($table = null, array $columns = null) : Select
    {
        return new Select($table, $columns);
    }

    public static function createInsert($table = null, array $data = null) : Insert
    {
        return new Insert($table, $data);
    }

    public static function createDelete($table = null) : Delete
    {
        return new Delete($table);
    }
}