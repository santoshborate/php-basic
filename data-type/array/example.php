
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
echo "<pre>";
var_dump($array);
?>



<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>

<?php
$a = [1, 2, 3, 4 => [1, 3 => [5,6,7]]];

echo count($a);
?>
