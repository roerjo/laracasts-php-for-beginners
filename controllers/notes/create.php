<?php

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

require view('notes/create.view.php', [
    'heading' => 'Create A Note',
    'errors' => $errors,
]);
