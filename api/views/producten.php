<?php
require_once __DIR__.'/../services/ProductService.php';
$products = getProducts();
ob_start();
?>

<div class="container py-5">
<h2 class="text-center mb-5">Onze Catalogus</h2>

<div class="row g-4">
<?php foreach($products as $p): ?>
<div class="col-md-4">
<div class="card p-3 h-100">
<img src="<?= $p['image'] ?>" style="height:180px;object-fit:contain;">
<h5 class="mt-3"><?= $p['title'] ?></h5>
<p class="fw-bold">€ <?= number_format($p['price'],2,',','.') ?></p>
<a href="/product/<?= $p['slug'] ?>" class="btn btn-tech w-100">Bekijk</a>
</div>
</div>
<?php endforeach; ?>
</div>

</div>

<?php $content = ob_get_clean(); ?>
