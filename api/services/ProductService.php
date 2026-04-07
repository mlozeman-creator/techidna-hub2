<?php
function getProducts() {
    $json = file_get_contents(DATA_PATH);
    $data = json_decode($json, true);
    return $data['products'] ?? [];
}

function getProductBySlug($slug) {
    foreach (getProducts() as $p) {
        if ($p['slug'] === $slug) return $p;
    }
    return null;
}
