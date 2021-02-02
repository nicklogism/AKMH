<?php
$host = "localhost"; //ip / domain where mysql server run
$user = "root";     // mysql server valid username
$pass = "";         // mysql user password
$db = "plir_ca";    //database to select. Την έχουμε φτιάξει στο phpmyadmin

/*  Connection function using mysqli driver (3 drivers at least exist)
    if connection fails print error and exit 
*/
$mysqli = new Mysqli($host, $user, $pass, $db);

if($mysqli->errno) {
    print $mysqli->errno;
}

?>