<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create A Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['body'], 1, 45)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }

    if (empty($errors)) {
        $db->query('insert into notes (user_id, body) values (:user_id, :body)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
}

require 'views/note-create.view.php';
