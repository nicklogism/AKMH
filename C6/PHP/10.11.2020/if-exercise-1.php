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

<?php

    $first = 10;
    $second = 20;

    if($first<$second)
    {
        print "$first<$second";
    }
    elseif($first>$second)
    {
        print "$first>$second";
    }
    else
    {
        print "$first=$second";
    }

    ?>
    </body>
    </html>

