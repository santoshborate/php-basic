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

 