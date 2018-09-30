<?php
// Get weeknumber in year
// date("W", $yourdate)

echo "Weeknummer of current week : " . date("W", strtotime('now')) , "<br>";

// Solution 1
$dateString = "2012-10-18";
echo "Weeknummer of 2012-10-18: " . date("W", strtotime($dateString)) , "<br>";



?>

