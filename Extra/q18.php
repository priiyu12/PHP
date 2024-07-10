<!DOCTYPE html> <html>
<head>
<title>Calculate Age</title> </head>
<body>
<h2>Calculate Age</h2> <form method="post">
<input type="date" name="birthdate" required> <br>
<button type="submit">Calculate Age</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$birthdate = $_POST["birthdate"]; $currentDate = new DateTime(); $birthDate = new DateTime($birthdate); $age = $currentDate->diff($birthDate)->y; echo "<p>Birthdate: $birthdate</p>"; echo "<p>Current Age: $age years</p>";
}
?>
</body>
</html>