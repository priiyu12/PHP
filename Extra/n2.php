<html>
<body>
<form method="POST">
<label>Enter String:</label>
<input type="text" name="string">
<input type="submit" value="Submit" name="Submit"><br><br> </body>
</html>
<?php
if(isset($_POST["Submit"]))
{
$st = $_POST['string'];
print("The Reverse String is:".strrev($st));
}
?>