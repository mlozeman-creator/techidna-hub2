<?php
session_start();

define('DATA_PATH', __DIR__ . '/../../data/products.json');

function isAdmin() {
    return $_SESSION['admin'] ?? false;
}
