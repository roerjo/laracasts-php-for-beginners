<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Create A Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    if (empty($_POST['body'])) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) > 45) {
        $errors['body'] = 'Body cannot be longer than 45 characters';
    }

    if (empty($errors)) {
        $db->query('insert into notes (user_id, body) values (:user_id, :body)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
}

require 'views/note-create.view.php';
