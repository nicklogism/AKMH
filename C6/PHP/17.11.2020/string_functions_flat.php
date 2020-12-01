<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> String Functions </title>
<style>	
	div{
		border:1px solid #CCC;
		padding :10px;	
		margin-top:10px;
	}
	h1 {
		text-align: center;
	}
</style>
</head>

<body>
<h1> String Functions </h1>

<div>
	<ul>
    	<li> Εύρεση μεγέθους αλφαριθμητικού με τη strlen()              </li>
        <li> Εύρεση ενός substring μέσα σε ένα string με την strstr()   </li>
        <li> Εύρεση της θέσης ενός substring με την strpos()            </li>
        <li> Εξαγωγή τμήματος από ένα string με την substr()            </li>
        <li> Αποκοπή εξωτερικών διαστημάτων σε ένα string με τις trim(), ltrim(), rtrim() </li>
        <li> Αντικατάσταση τμήματος ενός string με την substr_replace() </li>
        <li> Αντικατάσταση τμημάτων ενός string με την str_replace()    </li>
        <li> Αναδίπλωση κειμένου με την nl2br()                         </li>
    </ul>
</div>

<div>
<h3> strlen() </h3>
Παράδειγμα : <br>
<pre>
&lt;?php
	$str = "Hello World!";
	print strlen();
?>
</pre>

Αποτέλεσμα : <br>
<?php
	$str = "Hello World!";
	print strlen($str);
?>
</div>

<div>
<h3> strstr() </h3>
Παράδειγμα : <br>
<pre>
&lt;?php

	$str = "Hello World!";
	$search_str = "orl";
	if(strstr($str, $search_str)) {
		print "Item Found";
		print strstr($str, $search_str);
	}
	else {
	print "Item not Found";
	print strstr($str, $search_str);
	}
?>
</pre>
Αποτέλεσμα : <br>
<?php
	$str = "Hello World!";
	$search_str = "orl";
	if(strstr($str, $search_str)) {
		print "Item Found";
		print "<br>";
		print strstr($str, $search_str);
	}
	else {
	print "Item not Found";
	print "<br>";
	print strstr($str, $search_str);
	}
?>

</div>

<div>
<h3> strpos() </h3>
Παράδειγμα : <br>
<pre>
&lt;?php
	$str = "Hello World!";
	$search_str = "World";
	print "$search_str found in position ";
	print strrpos($str, $search_str);
	print " starting from position 0";
?>
</pre>

Αποτέλεσμα : <br>
<?php
	$str = "Hello World!";
	$search_str = "World";
	print "$search_str found in position ";
	print strrpos($str, $search_str);
	print " starting from position 0";
?>
</div>


<div>
<h3> substr() </h3>
Παράδειγμα : <br>
<pre>
&lt;?php
	$str = "Hello World!";
	$start_pos = 3;
	$num_chars = 6;
	print substr($str,$start_pos);
	print substr($str, $start_pos, $num_chars);

?>
</pre>


Αποτέλεσμα : <br>
<?php
	$str = "Hello World!";
	$start_pos = 3;
	$num_chars = 6;
	print substr($str,$start_pos);
	print "<br>";
	print substr($str, $start_pos, $num_chars);

?>
</div>

<div>
<h3> trim(), ltrim(), rtrim() </h3>
Παράδειγμα : <br>


Αποτέλεσμα : <br>
<?php


?>

</div>


<div>
<h3> substr_replace() </h3>
Παράδειγμα : <br>


Αποτέλεσμα : <br>

</div>


<div>
<h3> str_replace() </h3>
Παράδειγμα : <br>


Αποτέλεσμα : <br>

</div>

<div>
<h3> nl2br() -- (new line to html tag break) </h3>
Παράδειγμα : <br>


Αποτέλεσμα : <br>

</div>

</body>
</html>