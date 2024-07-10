<html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "userData";

	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("Sorry we failed to connect: ". mysqli_connect_error());
	}
	else{
		echo "Connection successfully established!";
	}
	echo "<br>";

	/*$table = "CREATE TABLE CustomerInfo (cid VARCHAR(6), name VARCHAR(20) NOT NULL, email VARCHAR(20) NOT NULL, PRIMARY KEY (cid))";
	$result=mysqli_query($conn,$table);

	if($result){
    echo "The table was created successfully!<br>";
	}
	else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
	}*/

	/*$cid = "C02";
	$name = "Arhaan";
	$email = "arhaan44@gmail.com";

	$sql = "INSERT INTO CustomerInfo (cid, name, email) VALUES ('$cid', '$name', '$email')";
	$res = mysqli_query($conn, $sql);

	if ($res) {
    	echo "The record has been inserted successfully!<br>";
	}
	else {
    	echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
	}*/

	$sql = "SELECT * FROM CustomerInfo";
	$result = mysqli_query($conn, $sql);
	$rowCount = mysqli_num_rows($result);
?>
<html>
	<body>
		<?php
        	if ($rowCount > 0) {
    	?>
		<table border="1">
			<tr>
	            <th>CID</th>
	            <th>Name</th>
	            <th>Email</th>
        	</tr>
        	<?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['cid'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
        ?>
		</table>
		<?php
    		} else {
        		echo "<p>No records found.</p>";
    		}
?>
	</body>
</html>