<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ΑΣΚΗΣΗ ΤΡΑΠΟΥΛΑ </title>
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


<?php
//ΑΣΚΗΣΗ ΤΡΑΠΟΥΛΑ
       
        $deckofcards = ["2","3","4","5","6","7","8","9","Clubs", "Diamonds", "Hearts", "Spades"];
            print "<pre>";
            shuffle($deckofcards);
            print_r($deckofcards);
            print "</pre>";
            print "<br>";

?>
</body>
</html>
