<?php
$originalString = "The brown fox";
$insertString = " Quick";
$position = 3;
$modifiedString = substr_replace($originalString, $insertString, $position, 0); 
echo "Main String: " . $originalString;
echo "</br>";
echo "Modified String: " . $modifiedString;
?>