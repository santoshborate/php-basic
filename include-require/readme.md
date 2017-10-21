PHP Include and require

**Rrequire**

will throw a PHP Fatal Error if the file cannot be loaded. (Execution stops)

**Include**

produces a Warning if the file cannot be loaded. (Execution continues)

**Include_once or require_once**

The include_once() and require_once() functions will not include the file a second time if it has already been included.

include_once and require_once behave like include and require respectively, except they will only include the file if it has not already been included. Otherwise, they throw the same sort of errors.

e.g

```apacheconfig
<?php  
echo "today is:".date("Y-m-d");  
?> 
```

and in another file that I have named test2.php

```apacheconfig
<?php  
require_once('test1.php');  
require_once('test1.php');  
?>
```

as you are watching the m requiring the the test1 file twice but the file will include the test1 once and for calling at the second time this will be ignored. And without halting will display the output a single time.



Whenever you are using 'include_once()` can be used in a file to include another file when you need the called file more than once in the current file. Here in the example I have a file named test3.php.

```apacheconfig
<?php  
echo "today is:".date("Y-m-d");  
?> 
```

And in another file that I have named test4.php

```apacheconfig
<?php  
include_once('test3.php');  
include_once('test3.php');  
?>
```

as you are watching the m including the test3 file will include the file a single time and for calling at the second time this will be ignored.
 
