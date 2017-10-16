PHP Variables

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
   
Pre defined variables:
   
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
 
   
   

