<?php
require_once __DIR__.'/../services/ProductService.php';

$slug = $_GET['slug'] ?? '';
$product = getProductBySlug($slug);

if (!$product) {
  echo "Product niet gevonden";
  exit;
}

ob_start();
?>

<div class="container">
  <h1><?= $product['title'] ?></h1>
  <img src="<?= $product['image'] ?>">
  <p><?= $product['description'] ?></p>
  <p><strong>€ <?= $product['price'] ?></strong></p>
  <a href="<?= $product['url'] ?>" class="btn" target="_blank">Koop op bol.com</a>
</div>

<?php $content = ob_get_clean(); require 'layout.php'; ?>
