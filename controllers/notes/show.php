<?php

$config = require(base_path('config.php'));
$db = new Database($config['database']);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id'],
])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

require view('notes/show.view.php', [
    'heading' => 'Note',
    'notes' => $note,
]);
