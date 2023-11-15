#!/usr/bin/php

<?php
echo "Hello World!\n";

var_dump($argv); // arguments de la cli

$string="Hello World!";
$integer=42;
$float=42.42;
$bool=true;
$array=[1,2,3];
$null=null;
$request=new Request();

function addInteger(integer $a, integer $b) {
    return $a+$b;
}




?>

