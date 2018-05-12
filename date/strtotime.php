<?php

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo date("Y-m-d", strtotime("11/20/10")), "<br>"; // PHP:  2010-11-20

echo date("jS F, Y", strtotime("11-12-10")), "<br>"; // 10th December, 2011

echo date( "Y-m-d", strtotime( "2009-01-31 +1 month" ) ); // PHP:  2009-03-03
echo date( "Y-m-d", strtotime( "2009-01-31 +2 month" ) ); // PHP:  2009-03-31

echo "<br>";

$date = "2011-12-10";
echo date('Y-m-d', strtotime($date .' -1 day')) , "<br>"; // 2011-12-09
echo date('Y-m-d', strtotime('2011-12-10 -1 day')) , "<br>"; // 2011-12-09

echo date('Y-m-d', strtotime('2011-12-10 +1 day')) , "<br>"; // 2011-12-11
?>

