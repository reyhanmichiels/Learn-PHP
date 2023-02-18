<?php
//Array used for storing multiple value (element) in 1 variable

//array() function is used for make array

//indexed array
$name = array("Reyhan", "Budi", "Putri");
$name[3] = "Joko";
$name[4] = "Kasep";
var_dump($name);
echo "<br><br>";

//associative array
$age = array($name[0] => 20, $name[1] => 23, $name[2] => 18);
$age[$name[3]] = 20;
$age[$name[4]] = 24;
var_dump($age);
echo "<br><br>";

//multidimensional array
$number = [
    [0, 1, 2],
    [3, 4],
    [5, 6, 7]
];
echo $number[0][0];
echo "<br>";
var_dump($number);

