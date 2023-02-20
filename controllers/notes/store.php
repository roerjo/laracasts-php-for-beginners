<?php

use Core\App;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['body'], 1, 45)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (! empty($errors)) {
    require view('notes/create.view.php', [
        'heading' => 'Create A Note',
        'errors' => $errors,
    ]);
}

if (empty($errors)) {
    $db->query('insert into notes (user_id, body) values (:user_id, :body)', [
        'body' => $_POST['body'],
        'user_id' => 1,
    ]);

    header('location: /notes');

    exit();
}
