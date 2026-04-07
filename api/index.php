<?php
$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if($uri=='/') require 'views/home.php';
elseif($uri=='/producten') require 'views/producten.php';
elseif($uri=='/over'){ echo "Over pagina"; }
elseif($uri=='/contact'){ echo "Contact pagina"; }
elseif(preg_match('#^/product/(.*)$#',$uri,$m)){
 $_GET['slug']=$m[1];
 require 'views/product.php';
}
else echo "404";
