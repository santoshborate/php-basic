
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    }
}

?>



<?php
//  Iterable parameter default value example
function foo(iterable $iterable = []) {
    // ...
}

?>
