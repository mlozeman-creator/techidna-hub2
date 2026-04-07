<?php
function getProducts(){
 return json_decode(file_get_contents(__DIR__.'/../../data/products.json'),true)['products']??[];
}
function getProduct($slug){
 foreach(getProducts() as $p){ if($p['slug']==$slug)return $p;}
 return null;
}
