<?php
$timezone_identifiers = DateTimeZone::listIdentifiers();

echo '<select name="timezone">';
foreach ($timezone_identifiers as $timezone) {
    echo '<option value="' . $timezone . '">' . $timezone . '</option>';
}
echo '</select>';
echo "<br>";
?>