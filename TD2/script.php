#!/usr/bin/php
<?php
var_dump($argv); // arguments de la cli

$string="Hello World!";
$integer=42;
$float=42.42;
$bool=true;
$array=[1,2,3];
$null=null;

function addInteger(int $a, int $b) {
    return $a+$b;
}

echo addInteger(1,5)




?>

