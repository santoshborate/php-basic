<?php

session_start();

setcookie('count', 12, time()+3600);

echo "<pre>";
print_r($_COOKIE);

print_r( getallheaders());

echo $userAgent = $_SERVER["HTTP_USER_AGENT"];

echo "<br> current session id = ". session_id();
?>

