<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Data Types</title>
	<style>
		h1{
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
	<h1> PHP Data Types </h1>
	
	<div>
		<strong> Boolean </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x=true;
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		print "<br>";
		
		?>
	</div>
	
	<div>
		<strong> Integer </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x=5;
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		print "<br>";
		
		?>
	</div>
	
	<div>
		<strong> Float/Double </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x=5.5;
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		print "<br>";
		
		?>
	</div>
	
	<div>
		<strong> String </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x = "5.55";
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		print "<br>";
		
		?>
	</div>
	
	<div>
		<strong> Array </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x = array(true, 5, 5.5, "hello");
		//εκτύπωση περιεχομένων (developers only)
		print "x = ";
		print "<pre>";
		print_r($x);
		print "</pre>";
		print "<br>";
		print "x type = ".gettype($x);
		print "<br>";
	
		?>
	</div>
	
	<div>
		<strong> Object </strong>
		<br>
		Example:
		<br>
		<?php
		/*προκειμένου να δημιουργήσω ένα αντικείμενο από τη κλάση Caclulator
		θα χρειαστεί να δημιουργήσω πρώτα τη κλάση*/
		class Calculator{
			
			public function add($x, $y){
				return $x+$y;
			}
			
			public function sub($x, $y){
				return $x-$y;
			}
		}
		
		//αρχικοποίηση μεταβλητής
		$x = new Calculator;
		//κλήση μεθόδου add και εκτύπωση αποτελέσματος
		print '$x->add(6,7) = ';
		print $x->add(6,7);
		print "<br>";
		print "x type = ".gettype($x);
		print "<br>";
		print "<br>";
		
		print '$x->sub(8,7) = ';
		print $x->sub(8,7);
		print "<br>";
		print "x type = ".gettype($x);
		print "<br>";
	
		?>
	</div>
	
		<div>
		<strong> NULL </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x=NULL;
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		print "<br>";
		
		?>
	</div>
	
		<div>
		<strong> RESOURCE </strong>
		<br>
		Example:
		<br>
		<?php
		//αρχικοποίηση μεταβλητής
		$x= fopen("test.txt", "r"); // πρέπει να υπάρχει το αρχείο test.txt στο κατάλληλο path
		//εκτύπωση τιμής μεταβλητής
		print "x=".$x;
		//αλλαγή γραμμής
		print "<br>";
		//εκτύπωση τύπου δεδομένων
		print "x type = ".gettype($x);
		fclose($x);
		print "<br>";
		
		?>
	</div>
	
</body>
</html>
