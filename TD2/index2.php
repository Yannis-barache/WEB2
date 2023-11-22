<?php

require 'data/products.php';
try {
    $products = get_products();
} catch (Exception $e) {
    $products = [];
    echo "Error : " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TD2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Mes produits</h1>
<?php
    if (empty($_GET['brand'])) {
        echo "<h2>Tous les produits</h2>";
    } else {
        $products = array_filter($products, fn($p)=>$p['brand'] == $_GET['brand']);
        echo "<h2>Produits filtrés pour n'avoir que ceux de </h2>";
        echo $_GET['brand'];
    }

foreach ($products as $key => $product) {
    echo "<div class='product'>";
    echo "<h2>" . $product['title'] . "</h2>";
    echo "<p>Marque: " . $product['brand'] . "</p>";
    echo "<p>Catégorie: " . $product['category'] . "</p>";
    echo "</div>";
}
?>

<h1>Produits filtrés pour n'avoir que ceux d'Apple</h1>

<?php
// filtrer pour avoir que apple
//$productsf = array_filter($products, function ($product) {
//    return $product['brand'] == 'Apple';
//});
$productsf = array_filter($products, fn($p)=>$p['brand'] == 'Apple');
foreach ($productsf as $key => $product) {
    echo "<div class='product'>";
    echo "<h2>" . $product['title'] . "</h2>";
    echo "<p>Marque: " . $product['brand'] . "</p>";
    echo "<p>Catégorie: " . $product['category'] . "</p>";
    echo "</div>";
}
?>