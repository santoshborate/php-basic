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
 
 # PHP treats NULL, false, 0, and the empty string as equal.
 
 **NULL And empty difference**
 
 A variable is NULL if it has no value, and points to nowhere in memory.
 
 empty() is more a literal meaning of empty, e.g. the string "" is empty, but is not NULL.
 
 

    The following things are considered to be empty:

        "" (an empty string)
        0 (0 as an integer)
        0.0 (0 as a float)
        "0" (0 as a string)
        NULL
        FALSE
        array() (an empty array)
        var $var; (a variable declared, but without a value in a class)


 
 ```apacheconfig
<?php
$var = NULL;
 
// Testing the variables
if(is_null($var)){
    echo 'This line is printed, because the $var is null.';
}
echo "<br>";

if(is_null($inexistent)){
    echo 'This line is printed, because the $inexistent is null.';
}
?>
```


