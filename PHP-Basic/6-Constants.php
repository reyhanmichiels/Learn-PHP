<?php

//constants is identifier that has an immutable value
//define(name, value, case-insentitive) function for make a constant
define("test", "Hello World!");

//constant accesed without $sign
echo test . "<br><br>";

define("arr", ["Hello", "World"]);
var_dump(arr);
echo "<br><br>";

//constant have a global scope and can be accessed from entire script
function test()
{
    echo test;
}

test();
