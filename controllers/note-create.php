<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Create A Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('insert into notes (user_id, body) values (:user_id, :body)', [
        'body' => $_POST['body'],
        'user_id' => 1,
    ]);
}

require 'views/note-create.view.php';
