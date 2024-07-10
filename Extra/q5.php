<?php
$first_num = $_POST["first_num"];
$second_num = $_POST["second_num"];
$operator = $_POST["operator"];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) { switch ($operator) {
case "Add":
$result = $first_num + $second_num;
break;
case "Subtract":
$result = $first_num - $second_num;
break;
case "Multiply":
$result = $first_num * $second_num;
break;
case "Divide":
$result = $first_num / $second_num;
}
}?>
<html>
<head>
<title>Simple Calculator</title>
</head>
<body>
<table border="3">
<div id="page-wrap">
<font color = green><h1>Simple Calculator</h1>
<form action="" method="post" id="quiz-form">
<p><tr>
<td><input type="number" name="first_num" id="first_num" required="required"
value="<?php echo $first_num;?>" /><font color = blue> <b>First Number</b></font></td>
</tr></p> <p><tr>
<td><input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <font color = blue><b>Second Number</b></font></td>
</tr></p>
<input type="submit" name="operator" value="Add" />
<input type="submit" name="operator" value="Subtract" />
<input type="submit" name="operator" value="Multiply" />
<input type="submit" name="operator" value="Divide" />
<p>
<input readonly="readonly" name="result" value="<?php echo $result; ?>"><font color= red> <b>Answer</b>
</font>
</p>
</form></font> </div></table></body>
</html>