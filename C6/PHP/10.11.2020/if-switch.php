<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ΕΝΤΟΛΕΣ ΕΛΕΓΧΟΥ ΡΟΗΣ ΕΚΤΕΛΕΣΗΣ ΤΗΣ PHP </title>
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
<h1> ΕΝΤΟΛΕΣ ΕΛΕΓΧΟΥ ΡΟΗΣ ΕΚΤΕΛΕΣΗΣ ΤΗΣ PHP </h1>
<div>
<strong> Η εντολή if </strong>
<p>
Η εντολή if μας επιτρέπει να επιλέξουμε ένα ανάμεσα σε δυο ή περισσότερα τμήματα κώδικα ως προς το ποιό θα εκτελεστεί.
</p>
Παράδειγμα (με χρήση του else) : <br>

<pre>
&lt;?php
	$traffic_light = "red";
	
	if($traffic_light == "red"){
		print "STOP!";		
	} else {
		print "WALK!";
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	$traffic_light = "red";
	
	if($traffic_light == "red"){
		print "STOP!";		
	} else {
		print "WALK!";
	}
	print "<br>";
?>

<p> </p>

Παράδειγμα (με χρήση του elseif ... else ) : <br>

<pre>
&lt;?php
	$traffic_light = "orange";
	
	if($traffic_light == "red"){
		print "STOP!";		
	} 
	elseif ($traffic_light == "orange" ) {
		print "WALK CAREFULLY!";
	} 
	else {
		print "WALK";
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	$traffic_light = "orange";
	
	if($traffic_light == "red"){
		print "STOP!";		
	} 
	elseif ($traffic_light == "orange" ) {
		print "WALK CAREFULLY!";
	} 
	else {
		print "WALK";
	}
	
	print "<br>";
?>
</div>

<div>
<strong> Η εντολή switch </strong>
<p>
Η εντολή switch μας επιτρέπει να επιλέξουμε ένα ανάμεσα σε δυο ή περισσότερα τμήματα κώδικα ως προς το ποιό θα εκτελεστεί. Την προτιμούμε όταν έχουμε περισσότερες από δυό επιλογές (εκεί θα ήταν προτιμότερη η χρήση της if).
</p>
Παράδειγμα : <br>

<pre>
&lt;?php
	$weekday = date('D');
	
	switch($weekday){
		case 'Mon' :
			print "Have a nice week!";
			break;
		case 'Fri' :
			print "Have a nice weekend";
			break;
		default :
			print "Have a nice day!";
	}
?&gt;
</pre>

Αποτέλεσμα : <br>
<?php
	$weekday = date('D');
	print "weekday=".$weekday;
	print "<br>";
	
	switch($weekday){
		case 'Mon' :
			print "Have a nice week!";
			break;
		case 'Fri' :
			print "Have a nice weekend";
			break;
		default :
			print "Have a nice day!";
	}
	print "<br>";
?>
</div>

<div>
<strong> Χρήση τριαδικού τελεστή (ternary operator) αντί της εντολής if </strong>
<br>
Παράδειγμα : <br>

<pre>
&lt;?php
	$traffic_light = "red";
	
	$message = ($traffic_light == "red")?"STOP!":"WALK!";
	print $message;
?&gt;
</pre>


Αποτέλεσμα : <br>
<?php
	$traffic_light = "red";
	
	$message = ($traffic_light == "red")?"STOP!":"WALK!";
	print $message;
?>
<hr>
<?php
	
	$traffic_light = "orange";
	//case 1
	$message = ($traffic_light == "red")?"STOP!":$message = ($traffic_light == "orange")?"WALK CAREFULLY!":"WALK!";
	print $message ."<br>";
	//case 2
	$traffic_light = "green";
	$message = ($traffic_light == "red")?"STOP!":(($traffic_light == "orange")?"WALK CAREFULLY!":"WALK!");
	print $message ."<br>";
?>
</div>

</body>
</html>