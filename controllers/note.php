<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Note";

$note = $db->query('select * from notes where user_id = 1 and id = :id', ['id' => $_GET['id']])->fetch();

require 'views/note.view.php';
