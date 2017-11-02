# Type Juggling 

PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used. That is to say, if a string value is assigned to variable $var, $var becomes a string. If an integer value is then assigned to $var, it becomes an integer. 

```apacheconfig

<?php
$foo = "1";  // $foo is string (ASCII 49)
$foo *= 2;   // $foo is now an integer (2)
$foo = $foo * 1.3;  // $foo is now a float (2.6)
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)
?>

```


# Type Casting 

Type casting in PHP works much as it does in C: the name of the desired type is written in parentheses before the variable which is to be cast. 

**Example 1**

```apacheconfig

<?php
$foo = 10;   // $foo is an integer
$bar = (boolean) $foo;   // $bar is a boolean
?>

```


 The casts allowed are:

    (int), (integer) - cast to integer
    (bool), (boolean) - cast to boolean
    (float), (double), (real) - cast to float
    (string) - cast to string
    (array) - cast to array
    (object) - cast to object
    (unset) - cast to NULL (PHP 5)
