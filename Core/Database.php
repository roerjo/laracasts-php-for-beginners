<?php

namespace Core;

use PDO;

class Database
{
    public $connection;

    public $statement;

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO(
            $dsn,
            $config['username'],
            $config['password'],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }

    public function query($query, $params)
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        if ($result = $this->statement->fetch()) {
            return $result;
        }

        abort(Response::NOT_FOUND);
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}
