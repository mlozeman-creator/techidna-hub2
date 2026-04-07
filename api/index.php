<?php
require __DIR__ . '/config/config.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require __DIR__ . '/views/home.php';
        break;
    case '/producten':
        require __DIR__ . '/views/producten.php';
        break;
    case '/over':
        require __DIR__ . '/views/over.php';
        break;
    case '/faq':
        require __DIR__ . '/views/faq.php';
        break;
    case '/contact':
        require __DIR__ . '/views/contact.php';
        break;
    default:
        http_response_code(404);
        echo "404";
}
