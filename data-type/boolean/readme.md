#Boolean 

This is the simplest type. A boolean expresses a truth value. It can be either TRUE or FALSE. 

To specify a boolean literal, use the constants TRUE or FALSE. Both are case-insensitive. 

```apacheconfig

<?php
$foo = True; // assign the value TRUE to $foo
?>

```


**Converting to boolean**

To explicitly convert a value to boolean, use the (bool) or (boolean) casts. However, in most cases the cast is unnecessary, since a value will be automatically converted if an operator, function or control structure requires a boolean argument. 

 When converting to boolean, the following values are considered FALSE:
 

    the boolean FALSE itself
    the integer 0 (zero)
    the float 0.0 (zero)
    the empty string, and the string "0"
    an array with zero elements
    the special type NULL (including unset variables)
    SimpleXML objects created from empty tags    
    

Every other value is considered TRUE (including any resource and NAN).
 
 
 **Warning**
  
 -1 is considered TRUE, like any other non-zero (whether negative or positive) number!
 
 
 ```apacheconfig

<?php
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
?>

```


# Example1
 ```
 <?php
 $x=TRUE;
 $y=FALSE;
 $z=$y OR $x;
 ?>
 ```

 Is $z TRUE or FALSE?
 
 
 In this case, $z will be FALSE because the above code is equivalent to <?php ($z=$y) OR $x ?> rather than <?php $z=($y OR $x) ?> as might be expected - because the OR operator has lower precedence than assignment operators.
 
 # Example 2
 
 On the other hand, after this code sequence:
 ```
 <?php
 $x=TRUE;
 $y=FALSE;
 $z=$y || $x;
 ?>
 ```
 
 $z will be TRUE, as expected, because the || operator has higher precedence than assignment:  The code is equivalent to $z=($y OR $x).
 
 
 This is why you should NEVER use the OR operator without explicit parentheses around the expression where it is being used.
 