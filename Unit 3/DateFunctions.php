<?php
	$date=date_create("2013-03-15");
	echo date_format($date,"Y/m/d H:i:s"); 
	echo "<br>";
	echo "<br>";

	    $date1=date_create("2013-03-15"); 
	    $date2=date_create("2013-12-12"); 
	    $diff=date_diff($date1,$date2);
	    echo $diff->format("%R%a days"); 
	    echo "<br>";
	    echo "<br>";

	print_r(date_parse("2013-05-01 12:30:45.5"));
	echo "<br>";
	echo "<br>";

	$date = new DateTime("2022-03-10");

	// Create a DateInterval representing 40 days
	$interval = new DateInterval("P40D");

	// Add the interval to the DateTime object
	$date->add($interval);

	// Display the result
	echo $date->format("Y-m-d"); // Output: 2022-04-19
	echo "<br>";
	echo "<br>";

	$date1 = new DateTime('2000-01-20'); 
	$date->sub(new DateInterval('P10D')); 
	echo $date->format('Y-m-d') . "\n";
	echo "<br>";
	echo "<br>";

	print_r(getdate());
	echo "<br>";
	echo "<br>";

	$t=time();
	echo($t . "<br>"); 
	echo(date("Y-m-d",$t));
?>