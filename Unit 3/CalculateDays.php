<?php
	$date1 = strtotime("2024-01-01");
	$date2 = strtotime("2024-01-31");

	$days = abs(($date1-$date2))/(60*60*24);
	echo "Difference between 2 dates : $days";
?>