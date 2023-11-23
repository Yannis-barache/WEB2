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
    <nav>
        <ul>
            <li><a href="tousProduits.php">Tous les produits</a></li>
            <?php
            $brands = array_map(fn($p) => $p['brand'], $products);
            $brands = array_unique($brands);
            foreach ($brands as $brand) {
                echo "<li><a href='tousProduits.php?brand=$brand'>$brand</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
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
    ?>
</body>
</html>
