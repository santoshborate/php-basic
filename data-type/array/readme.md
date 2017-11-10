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