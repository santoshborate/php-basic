<?php

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
    //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
    //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

    const MIN_VALUE = 2;      // RIGHT - Works INSIDE of a class definition.
    const MAX_VALUE = 3;      // RIGHT - Works INSIDE of a class definition.

    public static function getMinValue()
    {
        return MIN_VALUE;
    }

    public static function getMaxValue()
    {
        return self::MAX_VALUE;
    }
}

#Example 1:
echo $min = Constants::MIN_VALUE;
echo "<br>";
echo $max = Constants::MAX_VALUE;
echo "<br>";

#Example 2:
echo $min = Constants::getMinValue();
echo "<br>";
echo $max = Constants::getMaxValue();

echo "<br>". MIN_VALUE;

?>
