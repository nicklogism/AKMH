<?php 
// initialize session
session_start();

// if session var test does not exist
if(!isset($_SESSION['test'])){
    $_SESSION['test'] = "hello";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Initialize SESSION</title>
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
    <h1>Initialize Session </h2>
    <div>
  Παράδειγμα: <br>
  <pre>
&lt;?php 
// initialize session
session_start();

// if session var test does not exist
if(!isset($_SESSION['test'])){
    $_SESSION['test'] = "hello";
}
?>
</pre>
<p>
    Για να δούμε τη χρηστικότητα ενός session variable θα το καλέσουμε στην επόμενη σελίδα.<br>
    <a href="session_2.php">Go to session 2 page</a>
</p>
</div>
    
</body>
</html>