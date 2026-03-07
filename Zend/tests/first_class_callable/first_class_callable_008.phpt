--TEST--
First Class Callable from NEW
--FILE--
<?php
class Foo {
public function __construct(int $a) {}
}

function f () {}

//var_dump(f(...));
var_dump(new Foo(...));
?>
--EXPECTF--
Fatal error: Cannot create Closure for new expression in %s on line 6
