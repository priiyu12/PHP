<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "Welcome " . $_SESSION['username'];
		echo "<br>Your location is " . $_SESSION['address'];
	}
	else{
		echo "Please login to continue!";
	}
?>