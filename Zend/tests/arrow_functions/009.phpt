--TEST--
Using void as return type
--FILE--
<?php

$voidFunction = function (): void {
    echo 'Void function';
};

$fn = fn(): void => $voidFunction();
$fn();

?>
--EXPECT--
Void function
