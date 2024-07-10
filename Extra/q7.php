<!DOCTYPE html> <html>
<head>
<title>Form Validation</title> </head>
<body>
<h2>User Registration</h2> <form method="post" >
<label for="username">Username:</label>
<input type="text" name="username" required><br><br>
<label for="password">Password:</label>
<input type="password" name="password" required><br><br>
<label for="contact">Contact Number:</label>
<input type="text" name="contact" required><br><br>
<input type="submit" value="Register"> </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$usernamePattern = '/^[a-zA-Z0-9_@]{5,20}$/'; $passwordPattern = '/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{5,20}$/'; $contactPattern = '/^\d{10}$/';
if (preg_match($usernamePattern, $username)) { echo "Username :$username<br>";
} else {
echo "Invalid username format.<br>";
}
if (preg_match($passwordPattern, $password)) {
echo "Password : $password.<br>"; } else {
echo "Invalid password format.<br>"; }
if (preg_match($contactPattern, $contact)) { echo "Contact number : $contact<br>";
} else {
echo "Invalid contact number format.<br>";
}
echo" <button><a href=$_SERVER[PHP_SELF]> go back </a></button>"; }
?> </body> </html>