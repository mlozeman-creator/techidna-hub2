<?php
require_once __DIR__.'/../services/ProductService.php';
$p = getProduct($_GET['slug']);
if(!$p){ echo "Niet gevonden"; exit; }

ob_start();
?>

<div class="container py-5 text-center">
<h1><?= $p['title'] ?></h1>
<img src="<?= $p['image'] ?>" style="max-width:300px;">
<p class="mt-4"><?= $p['description'] ?></p>
<h3>€ <?= number_format($p['price'],2,',','.') ?></h3>
<a href="<?= $p['url'] ?>" class="btn btn-tech mt-3">Bekijk op bol.com</a>
</div>

<?php $content = ob_get_clean(); ?>
