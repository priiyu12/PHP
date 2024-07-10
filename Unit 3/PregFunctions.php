<?php
	$s = "Hello Tello, How are you?";		
	if (preg_match_all("/ell/", $s, $matches)) {
		$matchCount = count($matches[0]);
		
		echo "Matches were found $matchCount times <br />";
		foreach ($matches[0] as $match) {
			print_r($match . "<br />");  
		}
	}
	else {
		echo "No matches found.";
	}
?>
