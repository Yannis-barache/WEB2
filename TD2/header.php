<?php
function create_header(): void
{
    echo "<header>";
    echo "<nav>";
    echo "<ul>";
    echo "<li><a href='tousProduits.php'>Tous les produits</a></li>";
    require_once 'data/products.php';
    // Récupérer les marques
    $products = get_products();
    $brands = array_map(fn($p) => $p['brand'], $products);
    $brands = array_unique($brands);
    foreach ($brands as $brand) {
        echo "<li><a href='tousProduits.php?brand=$brand'>$brand</a></li>";
    }
    echo "</ul>";
    echo "</nav>";
    echo "</header>";

}

?>