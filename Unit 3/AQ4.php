<?php
	$date1 = new DateTime("2013-11-04");
	$date2 = new DateTime("2013-09-04");

	$interval = $date1->diff($date2);
	echo "Difference: ".$interval->y." years ".$interval->m." months ".$interval->d." days";
?>