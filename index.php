<?php

$books = [
    [
        'name' => 'Do Androids Deam of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://test.com',
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://test.com',
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://test.com',
    ],
];

//function filter($items, $fn) {
//    $filteredItems = [];

//    foreach ($items as $item) {
//        if ($fn($item)) {
//            $filteredItems[] = $item;
//        }
//    }

//    return $filteredItems;
//}

$filteredBooks = array_filter($books, function($book) {
    return $book['author'] === 'Andy Weir';
});

require 'index.view.php';
