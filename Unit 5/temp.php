<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
    <?php
    $cidErr = $nameErr = $emailErr = $genErr = $phoneErr = $passErr = "";
    $cid = $name = $email = $gender = $phone = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Check if the form is submitted, regardless of the submit button
        if (empty($_POST['cid'])) {
            $cidErr = "CID is required";
        } else {
            $cid = test_input($_POST['cid']);
            // Additional validation if needed
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
        Name: <input type="text" name="cid">
        <span class="error">* <?php echo $cidErr;?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset">
    </form>

    <?php
    // Display submitted data if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Customer ID: $cid<br>";
    }
    ?>
</body>
</html>
