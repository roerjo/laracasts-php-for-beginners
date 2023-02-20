<?php

require 'functions.php';

//require 'router.php';

// I found that I needed to use 127.0.0.1 instead of localhost, otherwise I
// would get an error about access denied. Probably due to using a MySQL
// Docker container. I think this SO post might explain it: https://stackoverflow.com/a/31414252
$pdo = new PDO(
    'mysql:host=127.0.0.1;port=3001;dbname=phpForBeginners;charset=utf8mb4',
    'root',
    'secret',
);

$statement = $pdo->prepare('select * from posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}
