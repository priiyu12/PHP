<?php
echo str_replace("php", "dsa","I love php, I love php too!", $cnt);
echo "<br>";
echo $cnt;
echo "<br>";
print_r(str_split("Hello", 3));
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
$a = str_word_count("Hello world!",1); 
echo $a[1];
echo "<br>";
echo substr("Hello world",0,10)."<br>"; 
echo substr("Hello world",1,8)."<br>"; 
echo substr("Hello world",0,5)."<br>"; 
echo substr("Hello world",6,6)."<br>";
echo substr("Hello world",0,-1)."<br>"; 
echo substr("Hello world",-10,-2)."<br>"; 
echo substr("Hello world",0,-6)."<br>";
?>