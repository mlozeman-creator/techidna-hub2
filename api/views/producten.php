<?php
require_once __DIR__.'/../services/ProductService.php';
$products = getProducts();

ob_start();
?>

<div class="container">
  <h2>Catalogus</h2>

  <div class="grid">
    <?php foreach($products as $p): ?>
      <div class="card">
        <img src="<?= $p['image'] ?>">
        <h3><?= $p['title'] ?></h3>
        <p>€ <?= $p['price'] ?></p>
        <a href="/product/<?= $p['slug'] ?>" class="btn">Bekijk</a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php $content = ob_get_clean(); require 'layout.php'; ?>
