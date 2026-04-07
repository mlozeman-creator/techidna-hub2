<?php
require_once __DIR__.'/../services/ProductService.php';
$p=getProductBySlug($_GET['slug']);
if(!$p){echo"Product niet gevonden";exit;}
ob_start();
?>

<div class="container">
<h1><?= $p['title'] ?></h1>
<img src="<?= $p['image'] ?>">
<p><?= $p['description'] ?></p>
<p><strong>€ <?= number_format($p['price'],2,',','.') ?></strong></p>
<a href="<?= $p['url'] ?>" class="btn" target="_blank">Bekijk op bol.com</a>
</div>

<?php $content=ob_get_clean(); require 'layout.php'; ?>
