<?php if(isset($_POST["LOGIN"])){
$name = $_POST ["Name"];
if (!preg_match ("/^[a-zA-z]*$/", $name) )
echo "Only alphabets and whitespace are allowed.<br>"; else
echo "your name is $name <br>";
$email = $_POST ["Email"];
$pattern ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; if (!preg_match ($pattern, $email) ){
echo ("Email is not valid. <br>"); }
else{
echo "Your valid email address is: $email <br>" ; }
if (empty ($_POST["Name"])) {
echo "Error! You didn't enter the Name. <br>"; }
$address=$_POST["Address"];
if (empty ($address)) {
echo "Error! You didn't enter the Address. <br>"; }
else {
echo " your address is $address <br> " ; }
if (empty ($_POST["Email"])) {
echo "Error! You didn't enter the Email. <br>" ; }
} ?>
<html>
<head>
<title>Registration Form</title>
</head> <body>
<h1> REGISTRATION FORM</h1> <form method="POST">
<table border=1> <tr>
<td>Full name:</td>
<td><input type="text" name="Name" > </td> </tr>
<tr>
<td>Address:</td>
<td><textarea col="1" rows="2" name="Address"></textarea></td>
</tr> <tr>
<td>City:</td> <td>
<select name="City"> <option>--select--</option> <option> Ahmdabad </option> <option> Surat</option> <option> Rajkot</option> <option> junagadh</option> <option> Girsomnath</option> <option> Amreli</option> <option> Dawarka </option> <option> bhuj</option> <option> anand</option> <option> valsad</option>
</select>
</td> </tr>
<tr> <td>Gender:</td> <td>
Male<input type="radio" name="Gender" value="Male"/> Female<input type="radio" name="Gender" value="Female"/> Other<input type="radio" name="Gender" value="Other "/>
</td> </tr>
<tr>
<td>Email ID:</td>
<td><input type="text" name="Email"> </td>
</tr> <tr>
<td> HOBBY:</td>
<td> MUSIC <input type="checkbox" name="Hobby"/>
READING <input type="checkbox" name="Hobby"/>
CRICKET <input type="checkbox" name="Hobby"/> </td>
</tr> <tr>
<td colspan="2" align="middle">
<input type="submit" value="LOGIN" name="save"> <input type="reset" value="RESET" name="reset">
</td> </tr>
</table> </form>
</body> </html>