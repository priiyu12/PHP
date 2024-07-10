<?php
	session_start();
	if(isset($_SESSION['username']) && (time() - $_SESSION['start_time']<60)) {
		echo "Username : " . $_SESSION['username'];
	}
	else{
		session_unset();
  		session_destroy();
		echo "session has expired!";
	}
?>