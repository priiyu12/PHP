<html>
<body>
<form method="POST">
<label><b>Enter Email:</b></label>
<input type="text" name="str" value="<?= isset($_POST['str']) ? $_POST['str'] : ''; ?>">
<br/>
<input type="submit" value="Submit" name="OnSubmit">
<hr/>
</form>
</body>
</html>
<?php
if(isset($_POST["OnSubmit"]))
{
if(isset($_POST['str'])) 
{
$st = $_POST['str'];
$user = strstr($st, '@', true);
if($user !== false) 
{
echo "<b>User name is: </b>".$user."\n";
} 
else 
{
echo "<b>Invalid email address format.</b>";
} 
}
} 
?>