<html>

	&copy; <!--copyright-->
	<?php
		$d=strtotime("10:30pm April 15 2014");
		echo "Created date is " . date("Y-m-d h:i:sa", $d);
		echo "<br>";

		//date in letters
		echo date('D'."/");//short
		echo date('l'." ");//full
		echo date('M'." ");
		echo date('Y'." ");
		echo "<br>";

		echo "Today is " . date("Y/m/d");//(/ or . or - can be added)
		echo "<br>";

		//date in numerics
		echo date('d'." ");
		echo date('m'." ");
		echo date('y'." ");
		echo "<br>";

		echo date('h'." ");
		echo date('i'." ");
		echo date('s'." ");
		echo date('a'." ");
		echo "<br>";

		echo date('H'." ");
		echo date('I'." ");
		echo date('S'." ");//original suffix for date (st, nd, th)
		echo "<br>";
	?>
</html>