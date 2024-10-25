<?php
require 'functions.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Убираем слэши в начале и конце строки, чтобы сопоставить маршруты
$a = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$routes = [
    '/draft' => 'controllers/index.php',
    '/draft/index' => 'controllers/index.php',
    '/draft/about' => 'controllers/about.php',
    '/draft/contact' => 'controllers/contact.php'
];

function routeToController($a, $routes) {
    if (array_key_exists($a, $routes)) {
        require $routes[$a];
    } else {
        abort();
    }
}

function abort() {
    http_response_code(404);
    require 'views/404.php';
    die();
}

routeToController($a, $routes);
