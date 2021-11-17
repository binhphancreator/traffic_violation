<?php

namespace GoSafer\Database; 

class Connection
{
    public static function connect(
        string $DB_HOST,
        string $DB_USER_ACCOUNT,
        string $DB_USER_PASSWORD,
        string $DB_INSTANCE
    ): \PDO {
        $db = new \PDO("mysql:host=$DB_HOST;dbname=$DB_INSTANCE", $DB_USER_ACCOUNT, $DB_USER_PASSWORD);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(\PDO::ATTR_PERSISTENT, false);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }
}

