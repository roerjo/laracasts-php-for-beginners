<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$posts = $db->query('select * from posts where id = ?', [$id])->fetchAll();

dd($posts);
