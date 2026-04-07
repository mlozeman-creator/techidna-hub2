<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function render($view) {
    include __DIR__ . "/views/layout.php";
}

switch ($uri) {
    case '/':
        $page = 'home';
        break;
    case '/producten':
        $page = 'producten';
        break;
    default:
        if (preg_match('#^/product/(.*)$#', $uri, $m)) {
            $_GET['slug'] = $m[1];
            $page = 'product';
        } else {
            $page = 'home';
        }
}
include __DIR__ . "/views/$page.php";
