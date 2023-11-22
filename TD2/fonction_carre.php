#!/usr/bin/php
<?php
function carre(int $x) {
    if ($x==0) {
        throw new Exception("L'argument doit être un nombre: $x <number>\n");
    }

    if (empty($x)) {
        //echo "Usage: $argv[0] <number>\n";
        //exit(1);
        throw new Exception("Il faut un argument: $x <number>\n");
    }

    return $x * $x;
}

try {
    echo sprintf("Le carré de %d est %d\n", 5, carre(5));

} catch (Exception $e) {
    echo $e->getMessage();
}


?>