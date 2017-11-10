# Object

An object is a data type which stores data and information on how to process that data.


**Class** − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.


**Object** − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.

**Converting to object**

If an object is converted to an object, it is not modified. If a value of any other type is converted to an object, a new instance of the stdClass built-in class is created. If the value was NULL, the new instance will be empty. An array converts to an object with properties named by keys and corresponding values, with the exception of numeric keys which will be inaccessible unless iterated. 

```apacheconfig

<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
var_dump(key($obj)); // outputs 'int(1)'
?>

```

For any other value, a member variable named scalar will contain the value. 

String
```apacheconfig

<?php
$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
?>

```

Integer 

```apacheconfig
<?php
$obj = (object) 3;
var_dump($obj); // objects   (stdClass)#2 (1) { ["scalar"]=> int(3)}
echo "<pre>";print_r($obj); // outputs   stdClass Object ( [scalar] => 3 )
echo $obj->scalar;  // outputs 3
?>
```

Boolean

```apacheconfig
<?php
$obj = (object) true;
var_dump($obj); // objects   (stdClass)#2 (1) { ["scalar"]=> bool(true)}
echo "<pre>";print_r($obj); // outputs   stdClass Object ( [scalar] => 1 )
echo $obj->scalar;  // outputs 3
?>
```