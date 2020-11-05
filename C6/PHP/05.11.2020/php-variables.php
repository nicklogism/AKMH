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
	</div>

	<div>
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
	</div>

	<div>
				<p>
			Οι μεταβλητές στην PHP <b> δεν είναι </b> προσβάσιμες 
			μέσα σε κώδικα που περικλείεται από μονά εισαγωγικά, πχ. print '$x'
		<br>
		Παράδειγμα:
		<pre>
		&lt;?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print 'x = $x';
		?>
		</pre>
				
		Αποτέλεσμα:
		<br>

		<?php
		//αρχικοποίηση μεταβλητής
		$x = 1;
		print 'x = $x';
		?>

		<br>
		</p>
	</div>


	<div>
	<p>
	Όλες οι μεταβλητές που έχουν δηλωθεί μέσα στο κύριο μέρος του κώδικα, όπως οι προηγούμενες,
	θεωρούνται Global Variables δηλ. προσβάσιμες από όλο το τρέχον php script. 
	</p>
	<p>
	Οι μεταβλητές που έχουν δηλωθεί μέσα σε μεμονωμένα μπλόκ κώδικα όπως τα functions θεωρούνται Local Variables δηλ.
	περιορισμένης εμβέλειας (μη προσβάσιμα εκτός του function). <br>
	Προκειμένου ένα function να έχει πρόσβαση σε ένα global variable πρέπει πρώτα να χρησιμοποιήσει τον όρο "global"
	</p>
	Παράδειγμα : <br>

    <pre>
		<&lt;php
		$x = 10; //Global Variable
		print "x value in main script body is $x";
		print "<br>";

		function test1(){
			$x = 20; // Local Variable
			print "x value in function test1 is $x";
			print "<br>";
		}

		function test2(){
			global $x; // καλούμε και πειράζουμε τη Global μεταβλητή
			print "x value in function test2 is $x";
			print "<br>";
		$x = 30;
		}

			test1();
		test2();
		print "x value in function main script body, now is $x";
		print "<br>";
		?>
	</pre>


	Αποτέλεσμα: 
	<br><br>

	<?php
	$x = 10; //Global Variable
	print "x value in main script body is $x";
	print "<br>";

	function test1(){
		$x = 20; // Local Variable
		print "x value in function test1 is $x";
		print "<br>";
	}

	function test2(){
		global $x; // καλούμε και πειράζουμε τη Global μεταβλητή
		print "x value in function test2 is $x";
		print "<br>";
		$x = 30;

	}

	test1();
	test2();
	print "x value in function main script body, now is $x";
	print "<br>";

	?>


	</div>

	<div>

	<p>
	Οι μεταβλητές που είναι προσβάσιμες από όλα τα php scripts και από οποιοδήποτε σημείο (εντός - εκτός functions) 
	θεωρούνται Super Global Variables. Τέτοιες μεταβλητές έχουν τη σύνταξη $_VARIABLE πχ $_GET, $_POST, $_SESSION κλπ. 
	</p>

	Παράδειγμα: <br>
	<!--Δημιουργία hyperlink με προορισμό άλλο php script. -->
	<a href="page2.php?param1=hello&param2=world">
	Κάνε κλικ εδώ για να πας στο page2.php 
	</a>

	</div>
	

</body>
</html>
