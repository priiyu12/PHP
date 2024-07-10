<?php
$countryCapitals = array(
"USA" => "Washington, D.C.", "Canada" => "Ottawa",
"United Kingdom" => "London", "France" => "Paris",
"Germany" => "Berlin", "Australia" => "Canberra", "Japan" => "Tokyo",);
echo "Country Names and Capitals:<br>"; $keys = array_keys($countryCapitals); $count = count($keys);
for ($i = 0; $i < $count; $i++) {
$country = $keys[$i];
$capital = $countryCapitals[$country]; echo "$country: $capital<br>";
}
echo" <button><a href=$_SERVER[PHP_SELF]> go back </a></button>";
?>