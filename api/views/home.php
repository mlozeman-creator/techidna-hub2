<?php ob_start(); ?>

<h1>Premium Tech Essentials</h1>
<a href="/producten">Bekijk assortiment</a>

<?php $content = ob_get_clean();
require 'layout.php';
