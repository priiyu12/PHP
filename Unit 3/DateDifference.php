<?php
	$date1 = new DateTime("2013-11-01");
	$date2 = new DateTime("2013-12-31");
	//diff stored in array
	$interval = $date1->diff($date2);

	echo "Difference: ".$interval->y." years ".$interval->m." months ".$interval->d." days";

?>