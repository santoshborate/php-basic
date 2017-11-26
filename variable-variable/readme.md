# Variable variable

PHP allows you to use dynamic variable names, called variable variables. You can name a variable with the value stored in another variable. That is, one variable contains the name of another variable. 


**Example 1**

Suppose you want to name a series of variables with the names of cities that have values that are the populations of the cities. You can use this code:

```apacheconfig
$Reno = 360000;
$Pasadena = 138000;
$cityname = "Reno";
echo "The size of $cityname is ${$cityname}";
$cityname = "Pasadena";
echo "The size of $cityname is ${$cityname}";
```


The output from this code is

```apacheconfig
The size of Reno is 360000
The size of Pasadena is 138000
```

**Example 2**

```apacheconfig
$a = 'hello';
$$a = 'world';
echo "$a ${$a}"; // hello world
echo "$a $$a"; // hello $hello
echo '$a ${$a}'; // $a ${$a}

```

Output

```
hello world. 
```


