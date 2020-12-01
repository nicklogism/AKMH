<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Read Session</title>
<style>
	h1, h2{
		text-align:center;	
	}
	
	div{
		border:1px solid gray;
		padding:10px;	
        margin:auto;
		margin-bottom:10px;
	}
</style>
</head>

<body>
    <h1>Read SESSION</h1>
    <div>
        Παράδειγμα κώδικα: <br>
<pre>
        &lt;?php
if(!isset($_SESSION['test'])){
    print "Session Test Value = ".$S_SESSION['test'];
}
else{
    print "Session var test not found.";
}
?>
</pre>
<br>
Αποτέλεσμα: <br>

<?php
if(isset($_SESSION['test'])){
    print "Session Test Value = ".$_SESSION['test'];
    print "<br>";
    print "PHP Session ID = ".session_id();
}
else{
    print "Session var test not found.";
}
?>

<p>
Για να καταργήσουμε ένα session χρησιμοποιούμε την εντολή session_destroy(). 
<br>
<br>
<a href="index.php">Κάντε κλικ εδώ</a> για να μεταφερθείτε στην index.php 
<br>
ή
<br>
<a href="session_3.php">Κάντε κλικ εδώ</a> για κατάργηση του session. 

</p>
</div>
    
</body>
</html>