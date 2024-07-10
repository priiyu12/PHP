<html>
<body>
<form method="post">
Enter the elements of the array: <br>
<input type="text" name="array_elements"><br><br> <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$array_elements = explode(",", $_POST['array_elements']); $num_elements = count($array_elements);
echo "Number of elements in the array: ". $num_elements; }
?>
</body>
</html>