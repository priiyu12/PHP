<b><font color =green>Calculate The Factorial Number.</font></b>
<html>
<head> <title>Calculate The Factorial Number</title> </head>
<body>
<form method="post">
<table border="3px solid red">
<tr><td>
<input type="number" name="number" id="number" placeholder="Enter number "></td> </tr>
<tr>
<td><input type="submit" name="submit" value="send to server"/></td>
</tr>
</table>
</form>
<?php
if($_POST){
$fact = 1;
$number = $_POST['number'];
if(is_numeric($number)){
echo "<font color=brown>Factorial of $number:<font color=red><br>"; for ($i = 1; $i <= $number; $i++){
$fact = $fact * $i;
}
echo $fact . "<br>";
}} echo "<a href=$_SERVER[PHP_SELF]>Go Back</a>";
?>
</body> 
</html>