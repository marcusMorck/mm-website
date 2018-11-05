<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '':
        require __DIR__ . '/views/index.php';
        break;
    case '/about-me':
        require __DIR__ . '/views/about-me.php';
        break;
    case '/contact':
        require __DIR__ . '/views/contact.php';  
        break;
    case '/portfolio':
        require __DIR__ . '/views/porfolio.php';  
        break;
    default:
        require __DIR__ . '404.php';
        break;
}
?>