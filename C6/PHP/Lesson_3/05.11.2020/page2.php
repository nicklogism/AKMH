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
<h1> PHP $_GET Variable examples </h1>
	<h2> (Superglobal) </h2>

    <div>
    <p>
    Ανάγνωση παραμέτρων που προέκυψαν από ένα GET request στο server, κάνοντας χρήση της <b> $_GET </b> Super Global Variable. 
    </p>
    Παράδειγμα: <br>
    <pre>
            &lt;?php
            $param1 = $_GET['param1'];
            $param2 = $_GET['param2'];
            print "param1 = $param1";
            print "<br>";
            print "param2 = $param2";
            print "<br>";
            print "GET type = " .gettype($_GET);
            ?>
    </pre>

    


<?php
    $param1 = $_GET['param1'];
    $param2 = $_GET['param2'];
    print "param1 = $param1";
    print "<br>";
    print "param2 = $param2";
    print "<br>";
    print "GET type = " .gettype($_GET);
?>

    </div>




</body>
</html>
