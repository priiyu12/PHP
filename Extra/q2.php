<html>
<head>
</head>
<title>Electricity Bill</title>
<body>
<form  method="POST">
<h2><b><u>Electricity Bill Generator</u></b></h2>
<table border="1">
<tr>
<td>User Name:</td>
</tr>
<td><input type="text" name="Name"/></td>
<tr>
<td>Enter consumed Units :</td>
<td> <input type="text" name="unit"/></td>
</tr>
<tr>
<td colspan="2" align=center> <input type="submit"
value="calculation" name="login" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["login"])){
$unit=$_POST["unit"];
if($unit < 50){
$bill =$unit*3.50;     }
else if($unit > 50 && $unit < 150 ){
    $bill =$unit*4;
    }
    else if($unit > 150 && $unit < 250){
    $bill =$unit*5.20;
    }
    else if($unit > 250){
    $bill =$unit*6.50;
    }
    echo "Yor total Bill amount is $bill";
    }
    echo" <button><a href=$_SERVER[PHP_SELF]> go back </a></button>";
    ?>
    </body>
    </html>