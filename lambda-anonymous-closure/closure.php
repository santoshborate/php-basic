<?php
$message = 'Hello, World!';

$sayHello = function () use (&$message) {
    echo $message;
    $message = 'Hello World Again!';
};

$sayHello(); // Hello, World!
$sayHello(); // Hello World Again!