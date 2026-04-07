<?php
function getProducts(){
 $data=json_decode(file_get_contents(DATA_PATH),true);
 return $data['products']??[];
}
function getProductBySlug($slug){
 foreach(getProducts() as $p){ if($p['slug']==$slug)return $p;}
 return null;
}
