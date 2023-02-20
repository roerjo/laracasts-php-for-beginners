<?php

class Database
{
    public $connection;

    public function __construct()
    {
        // I found that I needed to use 127.0.0.1 instead of localhost, otherwise I
        // would get an error about access denied. Probably due to using a MySQL
        // Docker container. I think this SO post might explain it:
        // https://stackoverflow.com/a/31414252
        $dsn = 'mysql:host=127.0.0.1;port=3001;dbname=phpForBeginners;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', 'secret');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
