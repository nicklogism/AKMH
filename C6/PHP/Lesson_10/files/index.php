<?php
/*
"r" - Read only. Starts at the beginning of the file
"r+" - Read/Write. Starts at the beginning of the file
"w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
"a+" - Read/Write. Preserves file content by writing to the end of the file
"x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
"x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
*/

$file = fopen("test.txt", "r");
// Εκτύπωσε μέχρι το τέλος του αρχείου EOF
while (! feof($file)) {
    $line = fgets($file);
    print $line. "<br>";
}
fclose($file);
?>

<hr>

<?php
$file = fopen("test.txt", "w");
fwrite($file, "Row4\nRow5\nRow6");
fclose($file);
?>

<br>
Opened and changed file contents
<hr>

<?php
    $file = file("test.txt");
    foreach ($file as $row)
    print $row. "<br>";
?>
<br>
Opened and append contents
<hr>

<?php
$file = fopen("test.txt", "a");
fwrite($file, "\nRow7\nRow8\nRow9");
fclose($file);
?>

<?php
    $file = file("test.txt");
    foreach ($file as $row)
    print $row. "<br>";
?>

<br>
File locking
<hr>

<?php

print "Lock file for writing";
$file = fopen("test.txt", "a");

if (flock($file, LOCK_EX)) {
    fwrite($file, "Add some text to the file");
    flock($file, LOCK_UN);
}
else {
    print "Error locking file";
}
fclose($file);

?>

<br>
Using file_get_contents
<hr>

<?php
echo nl2br(file_get_contents("test.txt"));
// print file_get_contents("http://google.com");

?>

