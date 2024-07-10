<!DOCTYPE html> <html>
<head>
<title>Student Details</title> </head>
<body>
<h2>Student Details</h2> <?php
$allStudents = array(
"Student1" => array(
"stud_detail" => array("name" => "krunal", "email" => "kruanlbaldhad@gmail.com"),
"subjects" => array( "BI" => 95,
"PHP" => 88,
"SE" => 75 ) ), "Student2" => array(
"stud_detail" => array("name" => "abhi ", "email" => "abhithummer@gmail.com"), "subjects" => array(
"BI" => 80,
"PHP" => 92,
"SE" => 85 ) ), );
$student1 = $allStudents["Student1"];
echo "<h3>Student1 Details:</h3>";
echo "Name: " . $student1['stud_detail']['name'] . "<br>"; echo "Email: " . $student1['stud_detail']['email'] . "<br>"; echo "Subjects and Marks:<br>";
echo "BI: " . $student1['subjects']['BI'] . "<br>";
echo "PHP: " . $student1['subjects']['PHP'] . "<br>"; echo "SE: " . $student1['subjects']['SE'] . "<br>";
echo "<br>";
$student2 = $allStudents["Student2"];
echo "<h3>Student2 Details:</h3>";
echo "Name: " . $student2['stud_detail']['name'] . "<br>"; echo "Email: " . $student2['stud_detail']['email'] . "<br>"; echo "Subjects and Marks:<br>";
echo "BI: " . $student2['subjects']['BI'] . "<br>";
echo "PHP: " . $student2['subjects']['PHP'] . "<br>"; echo "SE: " . $student2['subjects']['SE'] . "<br>";
echo "<br>";
echo" <br><button><a href=$_SERVER[PHP_SELF]> go back </a></button>"; ?>
</body> </html>