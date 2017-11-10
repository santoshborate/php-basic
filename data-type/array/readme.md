# Array

An array is a data structure that stores one or more similar type of values in a single value.

The values assigned to a PHP variable may be of different data types including simple string and numeric types to more complex data types like arrays and objects.

An array is a variable that can hold more than one value at a time. It is useful to aggregate a series of related items together, for example a set of country or city names.

```apacheconfig


    <?php

    $colors = array("Red", "Green", "Blue");

    var_dump($colors);

    echo "<br>";

     

    $color_codes = array(

        "Red" => "#ff0000",

        "Green" => "#00ff00",

        "Blue" => "#0000ff"

    );

    var_dump($color_codes);

    ?>


```

**Example #2 Type Casting and Overwriting example**

```apacheconfig

<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>

```

**Output**

```apacheconfig
array(1) {
  [1]=>
  string(1) "d"
}
```

**Example #3 Mixed integer and string keys**

```apacheconfig
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>
```

**Output**

```apacheconfig
array(4) {
  ["foo"]=>
  string(3) "bar"
  ["bar"]=>
  string(3) "foo"
  [100]=>
  int(-100)
  [-100]=>
  int(100)
}

```

**Example #4 Indexed arrays without key**

```apacheconfig

<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>
    
```

**Output**

```apacheconfig
array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(5) "hello"
  [3]=>
  string(5) "world"
}
```

It is possible to specify the key only for some elements and leave it out for others: 

**Example #5 Keys not on all elements**

```apacheconfig

<?php
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
?>

```

**Output**

```apacheconfig
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [6]=>
  string(1) "c"
  [7]=>
  string(1) "d"
}
```

**Example #6 Accessing array elements**

```apacheconfig

<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

```

**Output**

```apacheconfig
string(3) "bar"
int(24)
string(3) "foo"
```
