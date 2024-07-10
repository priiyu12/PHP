<?php
	/*Create a web application that will have array of fruits. Display the fruits name using foreach loop.*/
	$fruits = ["Apples", "Bananas", "Chikoo", "Pineapple", "Cherry", "Litchi"];
	print_r($fruits);
	echo "<br>";
	foreach ($fruits as $fruit) {
		echo $fruit . "<br>";
	}
?>