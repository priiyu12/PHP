<?php
	$date1 = strtotime("20-03-2023");

	$first = date("01-m-Y", $date1);
	$last = date("t-m-Y", $date1);

	echo "First Date : $first";
	echo "<br>";
	echo "Last Date : $last";
?>