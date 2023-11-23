
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="tousProduits.php">Tous les produits</a></li>
            <?php
            require_once 'data/products.php';
            // Récupérer les marques
            $products = get_products();
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
    <h1>Voici ma boutique</h1>

</body>
</html>



