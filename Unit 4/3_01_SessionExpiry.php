<?php
	session_start();
	$_SESSION['username']="priiyu12";
	$_SESSION['start_time']=time();

	if(isset($_SESSION['username'])){
		echo "Session set";
	}
	else{
		echo "Session is not set";
	}
?>