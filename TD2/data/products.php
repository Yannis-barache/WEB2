<?php
function get_products(){
    $source = 'data/product.json';
    $contenu = file_get_contents($source);
    $products = json_decode($contenu,true);
    if (empty($products)){
        throw new Exception("Le fichier $source ne contient pas de données valides");
    }
    return $products;
}
?>
