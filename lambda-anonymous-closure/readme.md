# Anonymous function , Lambda, Closure

**Anonymous function** - Function having no name

**Lambda** - It is Anonymous function assigned to any variable and passed as argument to any function

**Closure** - A closure is a lambda/anonymous function that is aware of its surrounding context through the use of use keyword. It can access a variable outside of the scope where it is defined.

More info : https://codeinphp.github.io/post/exploring-lambda-functions-and-closures-in-php/

**Lambda Example**

```apacheconfig
$multiply = function ($a, $b) {
    return $a * $b;
};

echo $multiply(5, 5); // 25
```

As can be seen, above anonymous function has no name and has been assigned to variable $multiply. You can also pass it other functions:

```apacheconfig
function countEmails($number) {
    echo 'you have ' . $number . ' emails!';
}

$multiply = function ($a, $b) {
    return $a * $b;
};

echo countEmails($multiply(2, 5)); // you have 10 emails!
```

You could have also written above like this if you wanted:

```apacheconfig
function countEmails($multiply, $a, $b) {
    echo 'you have ' . $multiply($a, $b) . ' emails!';
}

$multiply = function ($a, $b) {
    return $a * $b;
};

echo countEmails($multiply, 2, 5); // you have 10 emails!
```

And even like this:

```apacheconfig
function countEmails($multiply, $a, $b) {
    echo 'you have ' . $multiply($a, $b) . ' emails!';
}

echo countEmails(function ($a, $b) {
    return $a * $b;
}, 2, 5); // you have 10 emails!
```

You can also assign it to array:

```apacheconfig
$array['multiply'] = function ($a, $b) {
     return $a * $b;
};

echo $array['multiply'](2, 10); // 20
```

And even an object:

```apacheconfig
$obj = new StdClass();

$obj->multiply = function ($a, $b) {
     return $a * $b;
};
```

But caveat here is that instead of calling it like echo $obj->multiply(2, 10), you would instead need to do:

```apacheconfig
$multiply = $obj->multiply;
echo $multiply(2, 10); // 20
```


**Closure example** 
```apacheconfig
$message = 'Hello, World!';

$sayHello = function () use ($message) {
    echo $message;
};

$sayHello(); // Hello, World!
```
