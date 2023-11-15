#!/usr/bin/php
<?php

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i est pair\n";
    } else {
        echo "$i est impair\n";
    }
}

echo "Boucle while\n";
$i=1;

while ($i < 10) {
    echo $i%2==0 ? "$i est pair\n" : "$i est impair\n";
    $i++;
}

$colors = array("Red", "Green", "Blue");

foreach ($colors as $value) {
  echo "$value \n";
}

// Example of an indexed array
$fruits = array("apple", "banana", "cherry");

for ($i=0 ; $i < count($fruits) ; $i++) {
    echo "$fruits[$i] \n";
}

echo "\nBoucle associative\n";
// Example of an associative array
$fruits = array("apple" => "red", "banana" => "yellow", "cherry" => "red");
$newArray = array_keys($fruits);
print_r($newArray[0]);
echo "\n";
print_r($newArray[1]);
echo "\n";
print_r($newArray[2]);
echo "\n";
foreach ($fruits as $key => $value) {
    
    echo "$fruits[$key][$value] \n\n";
}

// Creating an array using square brackets
$fruits = ["apple", "banana", "cherry"];
for ($i=0 ; $i < count($fruits) ; $i++) {
    echo "$fruits[$i] \n";
}

?>
