<html>
	<head>
		<title>Factorial</title>
	</head>
	<body>
		<form method="POST">
		Enter number:
		<input type="text" name="num">
		<br><br>
		<input type="submit" name="submit">
		<br><br>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$num = $_POST['num'];
		$fac = 1;
		while($num>0){
			$fac *= $num;
			$num--;
		}
		echo "Factorial = $fac";
	}
?>