<?php
$contenu = file_get_contents('../data/product.json');
$products = json_decode($contenu);
var_dump($products);
?>
