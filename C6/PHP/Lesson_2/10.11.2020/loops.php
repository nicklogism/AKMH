<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ΒΡΟΧΟΙ </title>
<style>
	h1, h2{
		text-align:center;	
	}
	
	div{
		border:1px solid gray;
		padding:10px;	
		margin-bottom:10px;
	}
</style>
</head>

<body>
<h1> ΒΡΟΧΟΙ (LOOPS) </h1>

<div>
<p>
	<strong>Η εντολή επανάληψης while </strong>
</p>

Παράδειγμα : <br>

<pre>
&lt;?php
	$x = 1;
	
	while($x <= 10){
		print "x = $x";
		$x++;
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	$x = 1;
	
	while($x <= 10){
		print "x = $x";
		$x++;
		print "<br>";
	}
?>
<p>
<strong>Εναλλακτικός τρόπος γραφής του while</strong>
</p>

Παράδειγμα : <br>
<pre>
&lt;?php
	$x = 1;
	
	do {
		print "x = $x";
		$x++;
	} while($x <= 10)
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	$x = 1;
	
	do {
		print "x = $x";
		$x++;
		print "<br>";
	} while($x <= 10)
?>
</div>


<div>
<p>
	<strong>Η εντολή επανάληψης for </strong>
</p>

Παράδειγμα : <br>

<pre>
&lt;?php
	for($x=1;$x<=10;$x++){
		print "x = $x";
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	for($x=1;$x<=10;$x++){
		print "x = $x";
		print "<br>";
	}
?>

<p>
	<strong>Έξοδος απο τη for με χρήση του break </strong>
</p>

Παράδειγμα : <br>

<pre>
&lt;?php
	for($x=1;$x<=10;$x++){
		print "x = $x";
		if ($x == 5) {
			break;
		}
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	for($x=1;$x<=10;$x++){
		print "x = $x";
		if ($x == 5) {
			break;
		}
		print "<br>";
	}
?>

<p>
	<strong>Παράκαμψη επανάληψης στη for με χρήση του continue </strong>
</p>

Παράδειγμα : <br>


Αποτέλεσμα : <br>
<?php
	for($x=1;$x<=10;$x++){	
		if ($x == 5) {
			continue;
		} else {
			print "x = $x";
		}
		print "<br>";
	}
?>

</div>

</body>
</html>