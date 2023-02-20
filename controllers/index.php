<?php

$_SESSION['name'] = 'Eric';

require(view('index.view.php', [
    'heading' => 'Home',
]));
