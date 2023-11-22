#!/usr/bin/php
<?php
$list = ['php','html','css','python'];
$server = ['php','python'];

echo 'Method 1 :array_intersect()';


$final = array_intersect($list,$server);

var_dump($final);

foreach ($final as $value){
    echo $value;
}


?>