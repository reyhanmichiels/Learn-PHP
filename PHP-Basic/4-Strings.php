<?php 
$test = "Hello World!";


//strlen() return the length of string
echo strlen($test);
echo "<br><br>";

//str_word_count() return number of word in a string
echo str_word_count($test);
echo "<br><br>";

//strrev() return the reversed string
echo strrev($test);
echo "<br><br>";


//strpos() return index from searched character in a string
echo strpos($test, "Hello");
echo "<br><br>";


//str_replace() return replaced character in a string
echo str_replace("Hello", "Hi", $test);

