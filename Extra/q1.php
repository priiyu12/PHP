<font color =blue> <b>Check Whether Positive, Negative or Zero <b><br>
<html>
<head>
<title>pos or neg</title> </head>
<body>
<form method="post"> <table >
<tr>
<td> <input type="text" name="num" value="" placeholder="Enter a values"/> </td>
<td> <input type="submit" name="submit" value="Submit"/>
</td> </tr>
</table>
</form>
<?php
if(isset($_POST['submit'])) {
$number = $_POST['num']; if(is_numeric($number)){
if($number >= 0)
{
echo " <font color = yellow>$number is a positive number "; }
else if($number <=0) {
echo " <font color = orange>$number is a negative number "; }
else
{
echo " <font color = orange>$number is a zero number "; }
}
echo "<a href=$_SERVER[PHP_SELF]>Go Back</a>";
}
?> 
</body> 
</html>