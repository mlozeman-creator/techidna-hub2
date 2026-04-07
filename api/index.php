<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    require __DIR__ . '/views/home.php';
}
elseif ($uri === '/producten') {
    require __DIR__ . '/views/producten.php';
}
elseif (preg_match('#^/product/(.*)$#', $uri, $match)) {
    $_GET['slug'] = $match[1];
    require __DIR__ . '/views/product.php';
}
else {
    echo "404";
}
