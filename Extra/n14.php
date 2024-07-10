<?php
$numbers = array(73,9,5,2,3,54,12,12,29,15); 
$uniqueNumbers = array_unique($numbers); echo "Original Array: ";
print_r($numbers);
echo "<br>";
echo "Array after removing duplicates: "; print_r($uniqueNumbers);
?>