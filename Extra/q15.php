<!DOCTYPE html> <html>
<head>
</head>
<body>
<h2>Month Number to Month Name</h2> <?php
$monthNumber = 8;
$monthNames = array(
1 => "January",
2 => "February",
3 => "March",
4 => "April",
5 => "May",
6 => "June",
7 => "July",
8 => "August",
9 => "September",
10 => "October",
11 => "November", 12 => "December" );
$monthName = $monthNames[$monthNumber]; echo "<p>Month number: $monthNumber</p>"; echo "<p>Month name: $monthName</p>";
?>
</body>
</html>