<?php
$request = $_SERVER['REQUEST_URI'];

// Entferne Query-Strings
$path = parse_url($request, PHP_URL_PATH);

// Routing (sehr simpel)
switch ($path) {
    case '/':
        require 'pages/home.php';
        break;
    default:
        http_response_code(404);
        require '404.php';
        break;
}
