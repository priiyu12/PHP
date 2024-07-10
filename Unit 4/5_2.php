<?php
session_start();
if (isset($_POST['submit'])) {
  $_SESSION['uname'] = $_POST['uname'];
  $_SESSION['password'] = $_POST['password'];

  echo "Username : " . $_SESSION['uname'] . "<br>";
  echo "Password : " . $_SESSION['password'] . "<br>";
  echo "Your will redirected to home page within 10 Seconds!";
  header("refresh:10;url=5_1.php");
  exit;
} else {
  echo "Data not found!!";
}

?>