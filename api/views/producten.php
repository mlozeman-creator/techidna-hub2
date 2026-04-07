<?php
require_once __DIR__.'/../services/ProductService.php';
$products=getProducts();
ob_start();
?>

<div class="section">
<h2>Our Products</h2>
</div>

<div class="grid">
<?php foreach($products as $p): ?>
<div class="card">
<img src="<?= $p['image'] ?>">
<h3><?= $p['title'] ?></h3>
<p class="price">€ <?= $p['price'] ?></p>
<a href="/product/<?= $p['slug'] ?>" class="btn">View</a>
</div>
<?php endforeach; ?>
</div>

<?php $content=ob_get_clean(); require 'layout.php'; ?>
