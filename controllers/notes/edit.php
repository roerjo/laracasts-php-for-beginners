<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id'],
])->findOrFail();

require view('notes/edit.view.php', [
    'heading' => 'Update A Note',
    'note' => $note,
    'errors' => [],
]);
