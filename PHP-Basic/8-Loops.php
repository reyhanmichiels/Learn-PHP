<?php 

//loops is used for repeat code

//while loop, code is repeated during the condition is true
$a = 1;
while ($a <= 5) {
    echo "$a<br>";
    $a++;
}

echo "<br>";

//do while - same as while but the code will definitely be executed at least once
$a = 1;
do {
    echo "$a<br>";
    $a++;
} while ($a <= 0);

echo "<br>";


//for - code is repeated in specific number
for ($i=1; $i <= 5 ; $i++) { 
    echo "$i<br>";  
}

echo "<br>";

//foreach - for loop through all element array
$array = array("Hello", "my", "name", "is", "Reyhan");
foreach ($array as $arr) {
    echo $arr . " ";
}

echo "<br>";
echo "<br>";

//break is used for stop the loop
for ($i=1; $i <= 5 ; $i++) { 
    if ($i == 4) {
        break;
    }
    echo "$i<br>";  
}

echo "<br>";

//continue is used for skip the iteration
for ($i=1; $i <= 5 ; $i++) { 
    if ($i == 3) {
        continue;
    }
    echo "$i<br>";  
}