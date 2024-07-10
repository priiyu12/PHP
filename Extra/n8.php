<html>
<head>
<title>String Manipulation</title>
</head>
<body>
<h1>String Manipulation</h1>
<form method="post">
<label for="inputString">Enter a String:</label>
<input type="text" id="inputString" name="inputString">
<br><br>
<label for="operation">Select an Operation:</label>
<select id="operation" name="operation">
<option value="substring">Choose Part of String (Start Index)</option>
<option value="substring_length">Choose Part of String (Start Index and Length)</option> <option value="reverse_substring">Reverse Part of String (Start Index)</option>
<option value="reverse_substring_length">Reverse Part of String (Start Index and Length)</option>
</select>
<br><br>
<label for="startIndex">Start Index:</label>
<input type="number" id="startIndex" name="startIndex"> 
<br><br>
<label for="length">Length (if applicable):</label>
<input type="number" id="length" name="length">
<br>
<input type="submit" value="Perform">
</form> </body> </html>
<?php
$inputString = $_POST["inputString"];
$operation = $_POST["operation"];
$startIndex = $_POST["startIndex"];
$length = isset($_POST["length"]) ? $_POST["length"] : null; switch ($operation)
{
case "substring":
$result = substr($inputString, $startIndex);
break;
case "substring_length":
$result = substr($inputString, $startIndex, $length); break;
case "reverse_substring":
$result = substr($inputString, -$startIndex);
break;
case "reverse_substring_length":
$result = substr($inputString, -$startIndex, $length); break;
default:
$result = "Invalid operation";
break;
}
echo "<h2>Result of the $operation Operation</h2>"; echo "Input String: $inputString<br>";
echo "Operation: $operation<br>";
echo "Start Index: $startIndex<br>";
if ($length !== null)
{
echo "Length: $length<br>";
}
echo "Result: $result";
?>