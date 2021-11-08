<?php

namespace GoSafer\Database;

use GoSafer\Database\Connection;

class Connector
{
    /**
     * The connection object
     * @var PDO
     */
    private \PDO $connection;

    /**
     * Last used parameters for the connection when constructor was called.
     *
     * @var array
     */
    private array $connectionParams;

    /**
     *	Constructor that opens a new database connection
     */
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

    public function __destruct()
    {
        $this->connection = null;
    }
}
