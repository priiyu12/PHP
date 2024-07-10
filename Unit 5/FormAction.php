<?php
   $cidErr = $nameErr = $emailErr = $genErr = $phoneErr = $passErr = "";
    $cid = $name = $email = $gender = $phone = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['submit'])){ 
            if(empty($_POST['cid'])){
                $cidErr = "CID is required";
            }
            else{
                $cid = test_input($_POST['cid']);
            }

            if(empty($_POST['name'])){
                $nameErr = "Name is required";
            }
            else{
                $name = test_input($_POST['name']);
            }

            if(empty($_POST['email'])){
                $emailErr = "Email is required";
            }
            else{
                $email = test_input($_POST['email']);
            }

            if(empty($_POST['gender'])){
                $genErr = "Gender is required";
            }
            else{
                $gender = test_input($_POST['gender']);
            }

            if(empty($_POST['phone'])){
                $phoneErr = "Phone is required";
            }
            else{
                $phone = test_input($_POST['phone']);
            }

            if(empty($_POST['password'])){
                $passErr = "Password is required";
            }
            else{
                $password = test_input($_POST['password']);
            }

            function test_input($data) {
                $data = trim($data);
                // Additional validation if needed
                return $data;
            }


            echo "Customer ID: $cid<br>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Gender: $gender<br>";
            echo "Phone: $phone<br>";
        }
    }
?>
