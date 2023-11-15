#!/usr/bin/php
<?php
$x = 10;
$y = 5;

$is_equal = $x == $y;
$is_not_equal = $x != $y;
$is_greater = $x > $y;
$is_less = $x < $y;
$is_greater_or_equal = $x >= $y;
$is_less_or_equal = $x <= $y;

echo "\nis_equal: $is_equal\n";
echo "is_not_equal: $is_not_equal\n";
echo "is_greater: $is_greater\n";
echo "is_less: $is_less\n";
echo "is_greater_or_equal: $is_greater_or_equal\n";
echo "is_less_or_equal: $is_less_or_equal\n";

$x = 10;
$y = 5;

$is_and = $x == 10 && $y == 5;
$is_or = $x == 10 || $y == 5;
$is_not = $x != 10;

echo "is_and: $is_and\n";
echo "is_or: $is_or\n";
echo "is_not: $is_not\n";

?>
