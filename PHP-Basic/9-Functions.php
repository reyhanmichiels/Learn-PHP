<?php
//function is code of block than can be executed when we call the function 

//define a function without argument
function greet()
{
    echo "Hello my name is Reyhan<br><br>";
}

//call a function 
greet();

//define a function with argument
function greetWithArgument($name)
{
    echo "Hello my name is $name<br><br>";
}

greetWithArgument("Reyhan");

//define a function with return value
function greetReturn($name)
{
    return "Hello my name is $name<br><br>";
}

echo greetReturn("Reyhan");

//define a function with specified argument type
function sum(int $a, int $b)
{
    $result = $a + $b;
    echo "$result <br><br>";
}
//if the argument is not the same type, argument will be converted to expected type if possible
//use declare(strict_types = 1); beside <?php statement if you wanna program throw error if the argument don't have the same type

sum(2, "2");

//define a function with default argument value
function greetWithDefaultValue($name = "reyhan")
{
    echo "Hello my name is $name<br><br>";
}

greetWithDefaultValue();

//define a function with default return type value
function sumReturnString(int $a, int $b): string
{
    return $a + $b;
}

var_dump(sumReturnString(2, 2));
echo "<br><br>";

//pass by value
$x = 1;
echo '$x before function called = ' . "$x<br>";
function increamentValue($x) 
{
    $x++;
}
increamentValue($x);
echo '$x after function called = ' . "$x<br><br>";

//pass by Reference
$y = 1;
echo '$y before function called = ' . "$y<br>";
function increamentReference(&$y) 
{
    $y++;
}
increamentReference($y);
echo '$y after function called = ' . "$y<br><br>";





