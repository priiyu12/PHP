<html>
	<head>
		<title>Chess Board</title>
		<style>
			td {
				width: 50px;
				height: 50px;
			}
			.black {
				background-color: black;
			}
			.white {
				background-color: white;
			}
		</style>
	</head>
	<body>
		<center>
		<table border="2">
			<?php
				for ($i=1; $i<=9; $i++) { 
					echo "<tr>";
					for ($j=1; $j<=9; $j++) { 
						if (($i + $j) % 2 == 0){
							echo "<td class='black'></td>";
								} 
						else {
							echo "<td class='white'></td>";
						}
					}
					echo "</tr>";
				}
			?>
		</table>
		</center>
	</body>
</html>