<?php
require_once __DIR__.'/../services/ProductService.php';
$p=getProductBySlug($_GET['slug']);
if(!$p){echo"404";exit;}
ob_start();
?>

<div class="section">
<h1><?= $p['title'] ?></h1>
<img src="<?= $p['image'] ?>" style="max-width:400px;">
<p><?= $p['description'] ?></p>
<p class="price">€ <?= $p['price'] ?></p>
<a href="<?= $p['url'] ?>" class="btn">Buy on bol.com</a>
</div>

<?php $content=ob_get_clean(); require 'layout.php'; ?>
