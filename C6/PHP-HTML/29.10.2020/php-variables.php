<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Variables</title>
	<style>
		h1{
			text-align:center;
		}
		
		div{
			border:1px solid gray;
			padding:10px;
			margin-bottom:10px;
		}
		pre{
			margin-left:-75px;
		}
	</style>
</head>

<body>

	<h1> PHP Variables </h1>
	<h2> (Global, Local, Superglobal) </h2>
	
	<div>
		<p>
			Οι μεταβλητές στην PHP ξεκινούν πάντα με το σύμβολο $ πχ $x=1
		<br>
		Παράδειγμα:
		<pre>
		&lt;?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print "x =".$x;
		?>
		</pre>
				
		Αποτέλεσμα:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print "x =".$x;
		?>
		<br>
		</p>
		
				<p>
			Οι μεταβλητές στην PHP <b> είναι </b> προσβάσιμες 
			μέσα σε κώδικα που περικλείεται από διπλά εισαγωγικά, πχ. print "$x"
		<br>
		Παράδειγμα:
		<pre>
		&lt;?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print "x = $x";
		?>
		</pre>
				
		Αποτέλεσμα:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print "x = $x";
		?>
		<br>
		</p>
	
</body>
</html>
