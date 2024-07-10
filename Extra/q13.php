<!DOCTYPE html> <html>
<head>
<title>Array Functions </title> </head>
<body>
<h2>Array Functions </h2>
<?php
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(3, 4, 5, 6, 7);
$diff = array_diff($arr1, $arr2);
echo "<h3>array_diff()</h3>"; print_r($diff);
$arr3 = array("a", "b", "c");
$arr4 = array("d", "e", "f");
$merged = array_merge($arr3, $arr4); echo "<h3>array_merge()</h3>"; print_r($merged);
$intersect = array_intersect($arr1, $arr2); echo "<h3>array_intersect()</h3>"; print_r($intersect);
$shiftedValue = array_shift($arr1);
echo "<h3>array_shift()</h3>";
echo "Shifted Value: $shiftedValue<br>"; print_r($arr1);
array_unshift($arr1, 0);
echo "<h3>array_unshift()</h3>"; print_r($arr1);
$flipped = array_flip($arr3);
echo "<h3>array_flip()</h3>"; print_r($flipped);
?>
</body> </html>