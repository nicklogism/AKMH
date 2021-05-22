<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "autocomplete";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	mysqli_query($conn, "SET NAMES 'utf8'");
?>