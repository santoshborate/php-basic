<?php
$a = [1, 2, 3, 4 => [1, 3 => [5,6,7]]];

echo count($a); // Output 4
echo "<br>";
echo count($a, 1); // Output 9  : It count multidimensional  array
////  This is particularly useful for counting all the elements of a multidimensional array.
?>
