<?php

$a = 'hello';
$$a = 'world';
echo "$a ${$a}"; // hello world
echo "$a $$a"; // hello $hello
echo '$a ${$a}'; // $a ${$a}
?>