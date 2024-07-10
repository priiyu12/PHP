<!DOCTYPE html> <html>
<head>
<title>Number of Days Between Dates</title> 
</head>
<body>
<h2>Number of Days Between Dates</h2>
<form method="post">
<input type="date" name="startDate" required> <br>
<input type="date" name="endDate" required> <br>
<button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$dateDiff = abs(strtotime($endDate) - strtotime($startDate)); $numberOfDays = floor($dateDiff / (60 * 60 * 24));
echo "<p>Start Date: $startDate</p>";
echo "<p>End Date: $endDate</p>";
echo "<p>Number of days between dates: $numberOfDays</p>";
}
?>
</body>
</html>