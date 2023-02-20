<?php

$routes = require('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($status = 404) {
    http_response_code($status);

    include "views/{$status}.php";
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }

    abort(404);
}

routeToController($uri, $routes);
