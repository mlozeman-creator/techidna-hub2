<?php
require_once __DIR__ . '/../services/ProductService.php';
$products = getProducts();

ob_start();
?>

<h2>Onze Catalogus</h2>

<?php foreach ($products as $p): ?>
<div>
    <img src="<?php echo $p['image']; ?>" width="100">
    <h3><?php echo $p['title']; ?></h3>
    <p>€ <?php echo number_format($p['price'],2,',','.'); ?></p>
    <a href="<?php echo $p['url']; ?>">Bekijk</a>
</div>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require 'layout.php';
