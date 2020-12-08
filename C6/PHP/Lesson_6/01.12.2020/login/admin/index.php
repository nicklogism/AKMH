<?php
    session_start();

    // if $_SESSION['logged'] does not exist
    if(!isset($_SESSION['logged'])){
        header("location:../index.php");
    }
    else {
        // if $_SESSION['logged'] does not have the correct value 'secret'
        if($_SESSION['logged'] != 'secret'){
            header("location:..//index.php");
        }
    }
    
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title> ADMIN PAGE </title>
<style>
	h1, h2, h3{
		text-align:center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
</style>

</head>

<body>

<h2> Admin Area </h2>
<h3> If you see this, you have logged in succesfully!</h3>

</body>
</html>