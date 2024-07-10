<html>
<body>
<form method="post">
Enter the elements of the array: <br>
<input type="text" name="array_elements">
<br><br> 
<input type="submit" name="submit" value="Submit"> 
</form>
<?php
if(isset($_POST['submit']))
{
$array_elements = explode(",", $_POST['array_elements']); rsort($array_elements);
echo "Array elements in descending order: "; print_r($array_elements);
}
?>
</body>
</html>