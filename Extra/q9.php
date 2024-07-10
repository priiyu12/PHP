<!DOCTYPE html>
<html>
<head>
<title>Insert Array</title>
</head> <body>
<h2>Insert Array Item</h2> <form method="post">
<label for="newItem">New Item:</label>
<input type="text" name="newItem" required><br><br>
<label for="position">Position (0-based):</label> <input type="number" name="position" required><br><br>
<input type="submit" value="Insert"> </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$newItem = $_POST['newItem'];
$position = $_POST['position'];
$arrayItems = array("item1", "item2", "item3", "item4", "item5"); if ($position >= 0 && $position <= count($arrayItems)) {
array_splice($arrayItems, $position, 0, $newItem);
echo "New item '$newItem' inserted at position $position.<br>";
echo "Updated Array:<br>"; $count = count($arrayItems); for ($i = 0; $i < $count; $i++) {
echo "$arrayItems[$i]<br>";
}
} else {
echo "Invalid position. "; }
echo" <button><a href=$_SERVER[PHP_SELF]> go back </a></button>"; }
?> </body> </html>