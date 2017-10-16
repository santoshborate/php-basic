# PHP supports ten primitive types.

**Four scalar types:**

    boolean
    
    integer
    
    float (floating-point number, aka double)
    
    string


**Four compound types:**

    array
    
    object
    
    callable
    
    iterable
    

**And finally two special types:**

    resource
    
    NULL
    
# Type Juggling
PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used. That is to say, if a string value is assigned to variable $var, $var becomes a string. If an integer value is then assigned to $var, it becomes an integer.
 
An example of PHP's automatic type conversion is the multiplication operator '*'. If either operand is a float, then both operands are evaluated as floats, and the result will be a float. Otherwise, the operands will be interpreted as integers, and the result will also be an integer. Note that this does not change the types of the operands themselves; the only change is in how the operands are evaluated and what the type of the expression itself is.

```

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

```

<?php
$foo = 10;   // $foo is an integer
$bar = (boolean) $foo;   // $bar is a boolean
?>

```
