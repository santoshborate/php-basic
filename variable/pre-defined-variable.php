<?php
session_start();
$_SESSION['test'] = "Test data";
echo $_SERVER['DOCUMENT_ROOT'];

echo "<pre>";
print_r($GLOBALS);