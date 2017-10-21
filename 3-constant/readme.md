# Constant 

A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). A constant is case-sensitive by default. 
By convention, constant identifiers are always uppercase. 

The name of a constant follows the same rules as any label in PHP. A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.

**Note :**
 
Like superglobals, the scope of a constant is global. You can access constants anywhere in your script without regard to scope. For more information on scope, read the manual section on variable scope. 

**Example #1 Valid and invalid constant names**

```apacheconfig

<?php

// Valid constant names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something"); 

?>

```


define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.

define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.


//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
 
```apacheconfig
<?php

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

  public static function getMinValue()
  {
    return self::MIN_VALUE;
  }

  public static function getMaxValue()
  {
    return self::MAX_VALUE;
  }
}

?> 
``` 


```apacheconfig
<?php

#Example 1:
$min = Constants::MIN_VALUE;
$max = Constants::MAX_VALUE;

#Example 2:
$min = Constants::getMinValue();
$max = Constants::getMaxValue();

?>

```

**example 2**
When we start a constant name with space, it doesn't produce any error.

```apacheconfig
<?php
  define (" YEAR",  2000)
  echo "success";
?>
```

output: success

But when we call this constant, it produce error.

```apacheconfig
<?php
  define (" YEAR",  2000)
  echo YEAR;
?>
```
output: E_NOTICE :