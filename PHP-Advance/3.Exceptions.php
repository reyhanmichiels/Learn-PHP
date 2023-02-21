<?php

//Excepetions -> Object that describes an error in php 

//throw statement is used for pass exception int the method or function 
function div($a, $b)
{
    if ($b == 0) {
        throw new Exception("Can't divide by zero");
    }
    return $a / $b;
}

//try catch is used for caught exception that have been throw so the program will start running
try {
    div(2, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
