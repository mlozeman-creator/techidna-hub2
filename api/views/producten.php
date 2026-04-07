<?php
require_once __DIR__.'/../services/ProductService.php';
$products = getProducts();
ob_start();
?>
<h2>Catalogus</h2>
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">
<?php foreach($products as $p): ?>
<div style="border:1px solid #eee;padding:15px;">
<img src="<?php echo $p['image']; ?>" style="width:100%;">
<h3><?php echo $p['title']; ?></h3>
<p>€ <?php echo $p['price']; ?></p>
<a href="/product/<?php echo $p['slug']; ?>">Bekijk</a>
</div>
<?php endforeach; ?>
</div>
<?php $content=ob_get_clean(); require 'layout.php'; ?>
