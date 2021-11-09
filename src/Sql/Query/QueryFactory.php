<?php

namespace GoSafer\Sql\Query;

final class QueryFactory
{
    public static function createSelect($table = null, array $columns = null) : Select
    {
        return new Select($table, $columns);
    }
}