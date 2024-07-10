<?php
	$d1 = date_create("2024-12-12");
	$d2 = date_create("2024-03-27");
	$dt = date_diff($d2, $d1);
	echo $dt->format("%r%a days");
?>