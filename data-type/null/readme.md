# NULL

The special NULL value represents a variable with no value. NULL is the only possible value of type null. 

A variable is considered to be null if: 

 `it has been assigned the constant NULL.`
 
 `it has not been set to any value yet.`
 
 `it has been unset().`
 
 
 There is only one value of type null, and that is the case-insensitive constant NULL. 
 
 ```apacheconfig

<?php
$var = NULL;       
?>

```

**Casting to NULL**

Casting a variable to null using (unset) $var will not remove the variable or unset its value. It will only return a NULL value.
 
 
 **example**
 
 $a = array();
 
 $a == null  <== return true
 
 $a === null < == return false
 
 is_null($a) <== return false
 


