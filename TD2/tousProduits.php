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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Mes produits</h1>
    <?php
    if (!empty($_GET['brand'])) {
        $products = array_filter($products, fn($p) => $p['brand'] == $_GET['brand']);
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
        echo "<p>Marque: " . $product['brand'] . "</p>";
        echo "</td>";
        echo "<td>";
        echo "<p>Catégorie: " . $product['category'] . "</p>";
        echo "</td>";
        echo "<td>";
        echo "<a href='detail.php?id=" . $product['id'] . "'>Détail</a>";
        echo "</td>";
        echo "</tr>";
        echo "</div>";
    }

    echo "</table>";
    ?>
</body>
</html>
