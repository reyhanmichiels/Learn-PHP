<?php

$test = "Hello World";

//php variable have 3 scopes

//global
//variable declared outside function, and only can be accessed outside the function
$global = 1;

//local
//variable declared inside function, and only can be accesed within the function
function testFunction()
{
    $local = 1;
    echo $local;
}

//static
//local variable that not deleted after the function complete executed
function staticVariable()
{
    static $static = 5;
    echo $static;
    $static++;
}

//Accessed global variable inside function
function test()
{
    //Using array $GLOBALS['variable_name']
    $GLOBALS['global']++;
}
