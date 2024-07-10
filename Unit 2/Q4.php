<?php
	/*Create a PHP script using a for loop to add all the integers between 0 and 30 and display the total. */
	$num=0;
	$total = 0;
	while($num<=30){
		$total += $num;
		$num++;
	}
	echo "Total : $total";
?>