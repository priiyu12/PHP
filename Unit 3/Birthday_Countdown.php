<?php
	$today=time();
	$bday=strtotime("2024-03-20");

	$daysRemaining = intval(($bday-$today)/(60*60*24))+1;
	echo $daysRemaining;
?>