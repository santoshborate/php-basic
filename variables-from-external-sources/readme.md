# Variables From External Sources

**HTML Forms (GET and POST)**

When a form is submitted to a PHP script, the information from that form is automatically made available to the script. There are few ways to access this information, for example: 

**Example 1**

```apacheconfig
<form action="foo.php" method="post">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>
```

Accessing data from a simple POST HTML form

```apacheconfig

<?php
echo $_POST['username'];
echo $_REQUEST['username'];
?>

```

**HTTP Cookies**

PHP transparently supports HTTP cookies as defined by » RFC 6265. Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set cookies using the setcookie() function. Cookies are part of the HTTP header, so the SetCookie function must be called before any output is sent to the browser. This is the same restriction as for the header() function. Cookie data is then available in the appropriate cookie data arrays, such as $_COOKIE as well as in $_REQUEST. See the setcookie() manual page for more details and examples.

If you wish to assign multiple values to a single cookie variable, you may assign it as an array. For example: 

```apacheconfig

<?php
  setcookie("MyCookie[foo]", 'Testing 1', time()+3600);
  setcookie("MyCookie[bar]", 'Testing 2', time()+3600);
?>

```

