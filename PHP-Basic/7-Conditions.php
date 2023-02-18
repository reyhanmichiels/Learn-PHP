<?php 
$int = 5;

//if - will execute some statements if condition is true
if ($int > 1) {
    echo "true<br><br>";
}

//if else - will execute some statements if condition is true or false
if ($int > 6) {
    echo "true<br><br>";
} else {
    echo "false<br><br>";
}

//if else if - will execute first true condition
if ($int > 9) {
    echo "condition 1<br><br>";
} else if ($int < 6) {
    echo "condition 2<br><br>";
} else if ($int = 5) {
    echo "condition 3<br><br>";
}

//switch = will execute the true case
$name = "Reyhan";

switch ($name) {
    case 'Reyhan':
        echo "Hello Reyhan";
        break;
    
    case 'Joko':
        echo "Hello Joko";
        break;
    
    case 'Susi':
        echo "Hello Reyhan";
        break;
    
    default:
        echo "idk your name";
        break;
}
//default will be executed if there are no true case
//break is used to prevent the next case executed automatically
