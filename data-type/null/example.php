<?php
// Undefined variable
if($a == NULL) {
    echo 'is null';
}

// (an empty string)
$a = '';
if($a == NULL) {
    echo 'is null';
}

// "0" (0 as a string)
$a = "0";
if($a == NULL) {
    echo 'is null';
}


// (0 as an integer)
$a = 0;
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

// (0.0 as an float)
$a = 0.0;
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

// (an empty array)
$a = [];
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

// NULL
$a = NULL;
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

// False
$a = false;
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

// Not null

$a = 'r';
if($a == NULL) {
    echo 'is null';
} else {
    echo 'is not null';
}

?>