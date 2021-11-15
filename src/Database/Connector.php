<?php

namespace GoSafer\Database;

use GoSafer\Database\Connection;
use PDO;
class Connector
{
    private \PDO $connection;
    private array $connectionParams;
    public function __construct(array $connection_params)
    {
        $this->connectionParams = $connection_params;
        $this->initConnection();
    }

    private function initConnection()
    {
        $this->connection = Connection::connect(
            $this->connectionParams['host'],
            $this->connectionParams['user'],
            $this->connectionParams['password'],
            $this->connectionParams['schema']
        );
    }

    public function exec(string $query)
    {
        $this->connection->exec($query);
    }

    public function query(string $sql, array $params = [])
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function close()
    {
        $this->connection = null;
    }

    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }
}
