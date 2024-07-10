<?php
	if(isset($_COOKIE['username'])){
		echo "Welcome " . $_COOKIE['username'];
		echo "<br>Your location is " . $_COOKIE['address'];
	}
	else{
		echo "Please login to continue!";
	}
?>