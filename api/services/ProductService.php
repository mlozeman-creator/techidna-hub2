<?php

function getProducts() {
    static $data = null;

    if ($data === null) {
        if (!file_exists(DATA_PATH)) return [];
        $json = file_get_contents(DATA_PATH);
        $parsed = json_decode($json, true);
        $data = $parsed['products'] ?? [];
    }

    return $data;
}
