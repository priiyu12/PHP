<?php
	
	$sample = "hello WORLD How aRE You.";
	$sample1 = "Hello World How Are You.";
	echo strtolower($sample);
	echo "<br>";
	echo strtoupper($sample);
	echo "<br>";
	echo ucfirst($sample);
	echo "<br>";
	echo lcfirst($sample);
	echo "<br>";
	echo ucwords($sample);
	echo "<br>";
	echo strrev($sample);
	echo "<br>";
	echo strlen($sample);//with spaces start with 1
	echo "<br>";
	echo strpos($sample,"W", 3);
	echo "<br>";
	echo str_replace("WORLD", "World", $sample, $cnt);
	echo "<br>".$cnt;
	echo "<br>";
	print_r(str_split($sample, 5)); 
	echo "<br>";
	echo str_word_count($sample,0);
	echo "<br>";
	print_r(str_word_count($sample,1,'.'));
	echo "<br>";
	print_r(str_word_count($sample,2));
	echo "<br>";
	echo str_word_count($sample,0);
	echo "<br>";
	echo strcmp($sample, $sample1); 
	echo "<br>";
	echo substr($sample, 10);
	echo "<br>";
	echo substr($sample, -10)."<br>";
	echo substr($sample,0,10)."<br>";
	echo "<br>";
	echo strtok($sample, " ");
	while ($token !== false) {
echo "$token<br>"; $token = strtok(" ");
}
	echo "<br>";
	echo str_repeat($sample, 2);
	echo "<br>";
	echo substr_count($sample, "How", 3, 12);
?>