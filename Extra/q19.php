<!DOCTYPE html>
<html> <head>
<title>Math Functions</title> </head>
<body>
<h2>Math Functions</h2>
<form method="post">
<input type="number" name="value" required> <br>
<select name="function" >
<option value="sqrt">Square Root</option> <option value="pow">Power</option> <option value="sin">Sine</option>
<option value="cos">Cosine</option> <option value="tan">Tangent</option>
</select>
<br>
<button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$value = $_POST["value"]; $selectedFunction = $_POST["function"]; $result = "";
switch ($selectedFunction) 
{ 
    case "sqrt":
    $result = "Square Root of $value: " . sqrt($value);
    break; case "pow":
    $result = "Square of $value: " . pow($value, 2);
    break; case "sin":
    $result = "Sine of $value degrees: " . sin(deg2rad($value));
    break; case "cos":
    $result = "Cosine of $value degrees: " . cos(deg2rad($value)); break;
    case "tan":
    $result = "Tangent of $value degrees: " . tan(deg2rad($value)); break;
    default:
    $result = "Invalid Math Function";
}
echo "<p>$result</p>"; }
?>
</body>
</html>