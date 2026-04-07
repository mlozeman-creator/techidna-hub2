<?php
require_once __DIR__.'/../services/ProductService.php';
$p=getProductBySlug($_GET['slug']);
if(!$p){echo"404";exit;}
ob_start(); ?>
<div class="container">
<h1><?php echo $p['title']; ?></h1>
<img src="<?php echo $p['image']; ?>">
<p><?php echo $p['description']; ?></p>
<p><strong>€ <?php echo $p['price']; ?></strong></p>
<a href="<?php echo $p['url']; ?>" class="btn">Koop op bol.com</a>
</div>
<?php $content=ob_get_clean(); require 'layout.php'; ?>
