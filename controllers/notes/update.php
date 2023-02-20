<?php

use Core\App;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$currentUserId = 1;

$errors = [];

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id'],
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

if (! Validator::string($_POST['body'], 1, 45)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (! empty($errors)) {
    require view('notes/edit.view.php', [
        'heading' => 'Create A Note',
        'errors' => $errors,
        'note' => $note,
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');

exit();
