<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/login.php';
        break;
    case '':
        require __DIR__ . '/views/index.php';
        break;
    case '/chi-siamo':
        require __DIR__ . '/views/chi-siamo.php';
        break;
    default:
        require __DIR__ . '/views/404.html';
        break;
}
