<u><font color = blue>Day Number Of The Week</font></u>
<html>
<head>
<title> Number Of The Week</title> </head>
<body>
    <form method="post">
<table >
<tr>
<td><input name="dayname" type="number" placeholder="Enter a number (1 - 7):" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Enter"></td> </tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$num=($_POST["dayname"]);
if(is_numeric($num)){
$common="<font color = green>";
switch ($num) {
case '1':
echo "$common $num <font color=brown><br>Sunday <br> Have a nice Day ."; break;
case '2':
echo "$common $num <font color=brown><br>Monday. <br> Have a nice Day"; break;
case '3':
echo "$common $num <font color=brown><br>Tuesday. <br> Have a nice Day"; break;
case '4':
echo "$common $num <font color=brown><br>Wednesday. <br> Have a nice Day"; break;
case '5':
echo "$common $num <font color=brown><br>Thursday. <br> Have a nice Day"; break;
case '6':
echo "$common $num <font color=brown><br>Friday. <br> Have a nice Day"; break;
case '7':
echo "$common $num <font color=brown><br>Saturday. <br> Have a nice Day"; break;
default:
echo "Enter 1 to 7 only ..>";
}
}
} echo" <a href=$_SERVER[PHP_SELF]>Go Back</a>"
?>
</body>
</html>