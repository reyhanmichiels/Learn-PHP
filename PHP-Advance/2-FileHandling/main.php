<?php 

//readfile() used for open a file and read it
$test = readfile('help.txt');
echo $test . "<br><br>";

//fopen() used for open file, and second parameter specified action for the opened file
/*
action : 
r -> read only at begining file
w -> write only at begining file and erase the content, create a new file if file doesn't exist
a -> write only at end of file, create a new file if file doesn't exist
x -> create a new file for read only
r+ -> read and write at begining file
w+ -> read and write at begining file and erase the content, create a new file if file doesn't exist
a+ -> read and write  at end of file, create a new file if file doesn't exist
x +-> create a new file for read and write
*/
$file = fopen("help.txt", 'r') or die("File not exist");

//fread() reads from opened file, second parameter specifies maximum number of byte to read
echo fread($file, filesize('help.txt')) . "<br><br>";

//fclose() for closed the opened file;
fclose($file);

//fgets() for read a single line from opened file
//pointer will move to the next line after function called
$file = fopen("help.txt", 'r') or die("File not exist");
echo fgets($file) . "<br><br>";
fclose($file);

//feof() used for check if the end of file has been reached
$file = fopen("help.txt", 'r') or die("File not exist");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
echo "<br>";

//fgetc() for read a single character from opened file
//pointer will move to the next character after function called
$file = fopen("help.txt", 'r') or die("File not exist");
while (!feof($file)) {
    echo fgetc($file) . " ";
}
fclose($file);
echo "<br>";
echo "<br>";

//fwrite() used to write in a file
$file = fopen('testFile.txt', 'w+');
$text = "Create a new file\nthis is a new file";
fwrite($file, $text);
rewind($file);
echo fread($file, filesize('testFile.txt')) . "<br><br>";
fclose($file);

//appending text to a file
$file = fopen('testFile.txt', 'a');
$text = "im appending new text to this file";
fwrite($file, $text);
fclose($file);

//overwrite a file
$file = fopen('testFile.txt', 'w+');
$text = "im overwriting the same file";
fwrite($file, $text);
rewind($file);
echo fread($file, filesize('testFile.txt')) . "<br><br>";
fclose($file);


