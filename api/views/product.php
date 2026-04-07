<?php
require_once __DIR__.'/../services/ProductService.php';
$slug = $_GET['slug'] ?? '';
$product = getProductBySlug($slug);
if(!$product){ echo "Product niet gevonden"; exit; }

ob_start();
?>
<h1><?php echo $product['title']; ?></h1>
<img src="<?php echo $product['image']; ?>" style="width:300px;">
<p>Prijs: € <?php echo $product['price']; ?></p>
<p><?php echo $product['description']; ?></p>
<a href="<?php echo $product['url']; ?>" target="_blank">Koop op bol.com</a>
<?php $content=ob_get_clean(); require 'layout.php'; ?>
