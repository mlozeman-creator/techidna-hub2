<?php
require 'config/config.php';
$uri=$_SERVER['REQUEST_URI'];
if($uri=='/') require 'views/home.php';
elseif($uri=='/producten') require 'views/producten.php';
elseif(preg_match('#/product/(.*)#',$uri,$m)){$_GET['slug']=$m[1]; require 'views/product.php';}
else echo "404";
