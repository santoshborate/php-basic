# PHP Variables

Variables in PHP are represented by a dollar sign followed by the name of the variable.
 e.g $name 
1. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.
2. The variable name is case-sensitive.
3. By default, variables are always assigned by value.
4. PHP also offers another way to assign values to variables: assign by reference.
   This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable.
   Changes to the new variable affect the original, and vice versa.
   
   Note : Only named variables may be assigned by reference. 
   
   e.g 
   
   $foo = 'Bob';              // Assign the value 'Bob' to $foo
   $bar = &$foo;              // Reference $foo via $bar.
   
      
   Note: $this is a special variable that can't be assigned.
   
# Pre defined variables:
   
PHP provides a large number of predefined variables to all scripts. The variables represent everything from external variables to built-in environment variables, last error messages to last retrieved headers.

    Superglobals — Superglobals are built-in variables that are always available in all scopes
    
    $GLOBALS — References all variables available in global scope
    
    $_SERVER — Server and execution environment information
    
    $_GET — HTTP GET variables
    
    $_POST — HTTP POST variables
    
    $_FILES — HTTP File Upload variables
    
    $_REQUEST — HTTP Request variables
    
    $_SESSION — Session variables
    
    $_ENV — Environment variables
    
    $_COOKIE — HTTP Cookies
    
    $php_errormsg — The previous error message
    
    $HTTP_RAW_POST_DATA — Raw POST data
    
    $http_response_header — HTTP response headers
    
    $argc — The number of arguments passed to script
    
    $argv — Array of arguments passed to script 
    
# Variable scope

The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope. This single scope spans included and required files as well. For example: 
```

<?php
$a = 1;
include 'b.inc';
?>

```

Here the $a variable will be available within the included b.inc script. However, within user-defined functions a local function scope is introduced. Any variable used inside a function is by default limited to the local function scope. For example: 

```angular2html

<?php
$a = 1; /* global scope */ 

function test()
{ 
    echo $a; /* reference to local scope variable */ 
} 

test();
?>

```

#The global keyword

**Example #1 Using global**
```

<?php
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b;
?>

```

The above script will output 3. By declaring $a and $b global within the function, all references to either variable will refer to the global version. There is no limit to the number of global variables that can be manipulated by a function. 

A second way to access variables from the global scope is to use the special PHP-defined $GLOBALS array. The previous example can be rewritten as: 

**Example #2 Using $GLOBALS instead of global**

```

<?php
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;
?>

```

**Example #3 Example demonstrating superglobals and scope**

```
<?php
function test_global()
{
    // Most predefined variables aren't "super" and require 
    // 'global' to be available to the functions local scope.
    global $HTTP_POST_VARS;
    
    echo $HTTP_POST_VARS['name'];
    
    // Superglobals are available in any scope and do 
    // not require 'global'. Superglobals are available 
    // as of PHP 4.1.0, and HTTP_POST_VARS is now
    // deemed deprecated.
    echo $_POST['name'];
}
?>

```

#Using static variables

Another important feature of variable scoping is the static variable. A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope. Consider the following example:

**Example #4 Example demonstrating need for static variables**
```
<?php
function test()
{
    $a = 0;
    echo $a;
    $a++;
}
?>

```

This function is quite useless since every time it is called it sets $a to 0 and prints 0. The $a++ which increments the variable serves no purpose since as soon as the function exits the $a variable disappears. To make a useful counting function which will not lose track of the current count, the $a variable is declared static: 

**Example #5 Example use of static variables**
```apacheconfig

<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}
?>

```

 Now, $a is initialized only in first call of function and every time the test() function is called it will print the value of $a and increment it.
 
Static variables also provide one way to deal with recursive functions. A recursive function is one which calls itself. Care must be taken when writing a recursive function because it is possible to make it recurse indefinitely. You must make sure you have an adequate way of terminating the recursion. The following simple function recursively counts to 10, using the static variable $count to know when to stop:

**Example #6 Static variables with recursive functions**
```apacheconfig

<?php
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
?>

```


**Note:**

Static variables may be declared as seen in the examples above. From PHP 5.6 you can assign values to these variables which are the result of expressions, but you can't use any function here, what will cause a parse error. 

**Example #7 Declaring static variables**
```apacheconfig

<?php
function foo(){
    static $int = 0;          // correct 
    static $int = 1+2;        // correct (as of PHP 5.6)
    static $int = sqrt(121);  // wrong  (as it is a function)

    $int++;
    echo $int;
}
?>

```

**Note: Static declarations are resolved in compile-time.**
    
 
   
   

