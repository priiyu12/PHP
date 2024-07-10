<html>
<style>.error {color: #FF0000;}</style>
	<body>
		<?php
   $cidErr = $nameErr = $emailErr = $genErr = $phoneErr = $passErr = "";
    $cid = $name = $email = $gender = $phone = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	if (isset($_POST['submit'])){
        if(empty($_POST["cid"])){
            $cidErr = "CID is required";
        }else{
            $cid = test_input($_POST["cid"]);
        }

        if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	  }

        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        }else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["gender"])){
            $genErr = "Gender is required";
        }
        else{
            $gender = test_input($_POST["gender"]);
        }

        if(empty($_POST["phone"])){
            $phoneErr = "Phone is required";
        }
        else{
            $phone = test_input($_POST["phone"]);
        }

        if(empty($_POST["password"])){
            $passErr = "Password is required";
        }
        else{
            $password = test_input($_POST["password"]);
        }
    }
}

        function test_input($data) {
            $data = trim($data);
            // Additional validation if needed
            return $data;
        }
?>

		<form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
			<p><span class="error">* required field</span></p>
			<label for="cid">Customer ID:</label>
			<input type="text" name="cid"/>
			<span class="error">* <?php echo $cidErr;?></span>
			<br><br>

			<label for="name"> Name:</label>
			<input type="text" name="name"/>
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>

			<label for="email"> Email:</label>
			<input type="text" name="email"/>
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>

			<label for="gender"> Gender:</label>
			<input type="radio" id="male" name="gender" value="Male"/>Male
			<input type="radio" id="female" name="gender" value="Female"/>Female
			<input type="radio" id="other" name="gender" value="Other"/>Other
			<span class="error">* <?php echo $genErr;?></span>
			<br><br>


			<label for="phone"> Phone No:</label>
			<input type="text" name="phone"/>
			<span class="error">* <?php echo $phoneErr;?></span>
			<br><br>

			<label for="password"> Password:</label>
			<input type="password" name="password"/>
			<span class="error">* <?php echo $passErr;?></span>
			<br><br>

			<input type="submit" name="submit">
			<input type="reset" name="reset">
		</form>

<?php
		 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

 			echo "Customer ID: $cid<br>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Gender: $gender<br>";
            echo "Phone: $phone<br>";}
?>
	</body>
</html>