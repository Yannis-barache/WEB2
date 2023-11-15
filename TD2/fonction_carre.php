#!/usr/bin/php
<?php
function carre(integer $x) {
    return $x * $x;
}

echo carre(2);
echo "\n";

echo carre($argv[1])

?>