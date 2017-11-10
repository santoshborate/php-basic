
<?php
$obj = (object) array('1' => 'foo');
var_dump($obj); // outputs object(stdClass)#1 (1) { [1]=> string(3) "foo" }
print_r($obj); // outputs stdClass Object ( [1] => foo )
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
var_dump($obj->{'1'}); // outputs NULL with Notice Notice: Undefined property: stdClass::$1
var_dump(key($obj)); // outputs 'int(1)'
?>


<?php
$obj = (object) 'ciao';
var_dump($obj); // objects   (stdClass)#2 (1) { ["scalar"]=> string(4) "ciao" }
echo "<pre>";print_r($obj); // outputs   stdClass Object ( [scalar] => ciao )
echo $obj->scalar;  // outputs 'ciao'
?>

<?php
$obj = (object) 3;
var_dump($obj); // objects   (stdClass)#2 (1) { ["scalar"]=> int(3)}
echo "<pre>";print_r($obj); // outputs   stdClass Object ( [scalar] => 3 )
echo $obj->scalar;  // outputs 3
?>

<?php
$obj = (object) true;
var_dump($obj); // objects   (stdClass)#2 (1) { ["scalar"]=> bool(true)}
echo "<pre>";print_r($obj); // outputs   stdClass Object ( [scalar] => 1 )
echo $obj->scalar;  // outputs 3
?>

