<?php

function isTrue($condition)
{
    if ($condition) {
        return "Yes";
    } else {
        return "No";
    }
}

//integer is non decimal number in 32 or 64 bit system
$int = 5;
//is_int(data) function to check a data is int or not
echo '$int = ' . $int . "<br>";
echo '$int is integer ? = ' . isTrue(is_int($int)) . "<br><br>";

//floatis is number with decimal point
$float = 2.5;
//is_float(data) function to check a data is float or not
echo '$float = ' . $float . "<br>";
echo '$float is float ? = ' . isTrue(is_float($float)) . "<br><br>";

//NaN is Not a Number and used for impossible mathematical operation
$nan = acos(8);
//is_nan(data) function to check a data is NaN or not
echo '$nan = ' . $nan . "<br>";
echo '$nan is nan ? = ' . isTrue(is_nan($nan)) . "<br><br>";

//is_numeric(variable) function to check a variable is number or not
$string = "Hello";
echo '$string = ' . $string . "<br>";
echo '$string is number ? = ' . isTrue(is_numeric($string)) . "<br><br>";
