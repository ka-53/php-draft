<?php
require 'functions.php';

// Убираем слэши в начале и конце строки, чтобы сопоставить маршруты
$a = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$routes = [
    '/draft' => 'controllers/index.php',
    '/draft/index' => 'controllers/index.php',
    '/draft/about' => 'controllers/about.php',
    '/draft/contact' => 'controllers/contact.php'
];

if (array_key_exists($a, $routes)) {
    require $routes[$a];
} else {
   http_response_code(404);
   require 'views/404.php';
   die();
}
