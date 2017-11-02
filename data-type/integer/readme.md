# Integer 

An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.


Rules for integers:

    An integer must have at least one digit
    An integer must not have a decimal point
    An integer can be either positive or negative
    Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
    

**Example 1**  
```apacheconfig

<?php
$foo = "1";  // $foo is string (ASCII 49)
$foo *= 2;   // $foo is now an integer (2)
$foo = $foo * 1.3;  // $foo is now a float (2.6)
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)
?>

```  


If PHP encounters a number beyond the bounds of the integer type, it will be interpreted as a float instead. Also, an operation which results in a number beyond the bounds of the integer type will return a float instead.
 
**Example #2 Integer overflow on a 32-bit system**
 ```apacheconfig

<?php
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);                     // float(50000000000)
?>

```
**Note**

There is no integer division operator in PHP. 1/2 yields the float 0.5. The value can be casted to an integer to round it towards zero, or the round() function provides finer control over rounding.
 
```apacheconfig

<?php
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>

``` 

**Converting to integer **

To explicitly convert a value to integer, use either the (int) or (integer) casts. However, in most cases the cast is not needed, since a value will be automatically converted if an operator, function or control structure requires an integer argument. A value can also be converted to integer with the intval() function. 
  
    
