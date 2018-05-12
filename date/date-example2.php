<?php

echo date("Y-m-d");
echo "<br>";

echo date("Y-m-d", strtotime('now'));
echo "<br>";

echo date("Y-m-d", strtotime('yesterday'));
echo "<br>";

echo date("Y-m-d", strtotime('tomorrow'));
echo "<br>";

echo date("Y-m-d", strtotime('-1 year -1 month -1 week -1 day'));
echo "<br>";

$time = time();
echo date("Y-m-d", mktime(0,0,0,date("n", $time),date("j",$time)- 1 ,date("Y", $time)));
?>

