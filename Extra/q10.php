<!DOCTYPE html> <html>
<head>
<title>Employee Salary Management</title> </head>
<body>
<h2>Employee Salary Management</h2> <form method="post">
<label for="option">Select an Option:</label> <select name="option">
<option value="display">Display Array</option>
<option value="sort_key">Sort by Key</option>
<option value="sort_value">Sort by Value</option>
<option value="sort_key_reverse">Sort by Key (Reverse)</option> <option value="sort_value_reverse">Sort by Value (Reverse)</option>
</select>
<input type="submit" value="Submit"> </form>
<?php $employees = array(
"Alice" => 50000, "Bob" => 60000, "Charlie" => 55000, "David" => 48000, "Eve" => 52000);
$option = $_POST['option']; function displayArray($arr) {
list($name, $salary) = each($arr);
echo "$name: $salary<br>"; }
switch ($option) { case "display":
echo "Employee Salary Array:<br>"; array_walk($employees, 'displayArray'); break;
case "sort_key":
ksort($employees);
echo "Sorted by Key:<br>"; array_walk($employees, 'displayArray'); break;
case "sort_value":
asort($employees);
echo "Sorted by Value:<br>"; array_walk($employees, 'displayArray'); break;
case "sort_key_reverse": krsort($employees);
echo "Sorted by Key (Reverse):<br>"; array_walk($employees, 'displayArray'); break;
case "sort_value_reverse": arsort($employees);
echo "Sorted by Value (Reverse):<br>"; array_walk($employees, 'displayArray'); break;
default:
echo "Invalid option.";
}
?> </body> </html>