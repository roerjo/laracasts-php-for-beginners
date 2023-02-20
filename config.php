<?php

return [
    'database' => [
        // I found that I needed to use 127.0.0.1 instead of localhost, otherwise I
        // would get an error about access denied. Probably due to using a MySQL
        // Docker container. I think this SO post might explain it:
        // https://stackoverflow.com/a/31414252
        'host' => '127.0.0.1',
        'port' => '3001',
        'dbname' => 'notes',
        'charset' => 'utf8mb4',
        'username' => 'root',
        'password' => 'secret',
    ],
];
