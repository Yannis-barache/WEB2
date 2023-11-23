<?php
require 'data/products.php';
try {
    $products = get_products();
} catch (Exception $e) {
    echo "Error : " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TD2</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<header>
    <?php
    require_once "header.php";
    create_header();
    ?>
</header>

<body>

    <?php
    if (!empty($_GET['brand'])) {
        $products = array_filter($products, fn($p) => $p['brand'] == $_GET['brand']);
    }
    if (!empty($products)){
        if (!empty($_GET['brand'])){
            $marque = $_GET['brand'];
            echo "<h1>Les produits de $marque</h1>";
        }
        else {
            echo "<h1>Tous les produits</h1>";
        }
        echo "<table>";
        foreach ($products as $key => $product) {
            echo "<div class='product'>";

            echo "<th>Titre</th>";
            echo "<th>Marque</th>";
            echo "<th>Catégorie</th>";
            echo "<th>Détail</th>";
            echo "<tr>";
            echo "<td>";
            echo "<h2>" . $product['title'] . "</h2>";
            echo "</td>";
            echo "<td>";
            echo "<p>" . $product['brand'] . "</p>";
            echo "</td>";
            echo "<td>";
            echo "<p> " . $product['category'] . "</p>";
            echo "</td>";
            echo "<td>";
            echo "<a href='detail.php?id=" . $product['id'] . "'>Détail</a>";
            echo "</td>";
            echo "</tr>";
            echo "</div>";
        }
        echo "</table>";
    }
    else{
        echo "<h2>Cette marque n'existe pas ou nous n'avons pas de produit pour cette marque</h2>";
    }


    ?>
</body>
</html>
