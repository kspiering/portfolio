<?php
$request = $_SERVER['REQUEST_URI'];

// Entferne Query-Strings
$path = trim(parse_url($request, PHP_URL_PATH), '/');

switch ($path) {
    case '':
        require 'pages/home.php';
        break;
    case 'about':
        require 'pages/about.php';
        break;
    case 'contact':
        require 'pages/contact.php';
        break;
    case 'projects':
        require 'pages/projects.php';
        break;
    default:
        http_response_code(404);
        require '404.php';
        break;
}
