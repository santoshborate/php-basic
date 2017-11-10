# Iterables

Iterable is a pseudo-type introduced in PHP 7.1. It accepts any array or object implementing the Traversable interface. Both of these types are iterable using foreach and can be used with yield from within a generator. 

Iterable can be used as a parameter type to indicate that a function requires a set of values, but does not care about the form of the value set since it will be used with foreach. If a value is not an array or instance of Traversable, a TypeError will be thrown. 

**Example #1 Iterable parameter type example**

```apacheconfig

<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}

?>

```

Parameters declared as iterable may use NULL or an array as a default value. 

**Example #2 Iterable parameter default value example**

```apacheconfig

<?php

function foo(iterable $iterable = []) {
    // ...
}

?>

```

Iterable can also be used as a return type to indicate a function will return an iterable value. If the returned value is not an array or instance of Traversable, a TypeError will be thrown. 

**Example #3 Iterable return type example**

```apacheconfig

<?php

function bar(): iterable {
    return [1, 2, 3];
}

?>

```
Functions declaring iterable as a return type may also be generators. 

**Example #4 Iterable generator return type example**

```apacheconfig

<?php

function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

?>

```

# Iterable Type Variance

Classes extending/implementing may broaden methods using array or Traversable as parameter types to iterable or narrow return types from iterable to array or Traversable. 

**Example #5 Iterable type variance example**

```apacheconfig

<?php

interface Example {
    public function method(array $array): iterable;
}

class ExampleImplementation implements Example {
    public function method(iterable $iterable): array {
        // Parameter broadened and return type narrowed.
    }
}

?>

```