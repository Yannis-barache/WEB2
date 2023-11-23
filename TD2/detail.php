<?php
require 'data/products.php';
$products = get_products();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Détail du produit</h1>
<?php
if (!empty($_GET['id'])) {
    $products = array_filter($products, fn($p) => $p['id'] == $_GET['id']);
    if (count($products) == 0) {
        echo "<p>Il n'y a pas de produit avec cet id</p>";
        exit();
    }
    if (count($products) > 1) {
        echo "<p>Il y a plusieurs produits avec cet id</p>";
        exit();
    }
    $product = array_shift($products);

    echo "<div class='product'>";
    echo "<h2>" . $product['title'] . "</h2>";
    echo "<p>Marque: " . $product['brand'] . "</p>";
    echo "<p>Catégorie: " . $product['category'] . "</p>";
    foreach ($product['images'] as $image ){
        echo "<img src=$image ></img>";
    }
    echo "</div>";
} else {
    echo "<p>Il faut un id</p>";
}
?>
<form action="tousProduits.php">
    <input type="submit" value="Retour"></input>
</form>
</body>
</html>



