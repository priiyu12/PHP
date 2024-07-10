
<!DOCTYPE html> <html>
<head>
<title>Divisible </title> </head>
<body>
<h2>Values Divisible by 4</h2> <?php
$values = array();
for ($i = 155; $i <= 200; $i++) {
$values[] = $i; }
echo "Values divisible by 4: "; $count = count($values); $divisibleBy4 = array();
for ($i = 0; $i < $count; $i++) { if ($values[$i] % 4 === 0) {
    $divisibleBy4[] = $values[$i]; }}
    echo implode(', ', $divisibleBy4);
    echo" <button><a href=$_SERVER[PHP_SELF]> go back </a></button>";
?> 
</body>
</html>
    