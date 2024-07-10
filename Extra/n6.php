<html>
<body>
<form method="POST">
<label>Enter Character:</label>
<input type="text" name="char">
<input type="submit" value="Submit" name="Submit">
<br><br>
</body>
</html>
<?php
if(isset($_POST["Submit"]))
{
$cha = $_POST['char'];
$next_cha = ++$cha;
if (strlen($next_cha) > 1) 
{
    $next_cha = $next_cha[0];
}
echo $next_cha; 
}
?>