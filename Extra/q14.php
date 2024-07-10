<!DOCTYPE html> <html>
<head>
<title>Current Date Format</title> </head>
<body> <h2> Date Format</h2> <?php
$currentDate1 = date("d.m.y");
echo "<p>A. Current Date (dd.mm.yy): $currentDate1</p>";
$currentDate2 = date("d-m-y");
echo "<p>B. Current Date (dd-mm-yy): $currentDate2</p>"; ?></body></html>