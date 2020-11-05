<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ΕΝΤΟΛΕΣ ΕΛΕΓΧΟΥ ΡΟΗΣ ΕΚΤΕΛΕΣΗΣ ΣΤΗΝ PHP</title>
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
<h1> ΔΟΜΕΣ ΕΠΑΝΑΛΗΨΗΣ ΣΤΗΝ PHP </h1>

<h3>while</h3>

<div>
Παράδειγμα: <br>

            <pre>
             &lt;php
             $x = 1;
            while($x <=10 ){
            print "x = $x";
            print "<br>";
            $x++;
            }
            ?>
            </pre>

Αποτέλεσμα: <br>
<?php
    $x = 1;
    while($x <=10 ){
        print "x = $x";
        print "<br>";
        $x++;
    }
?>

</div>

<h3>do...while</h3>
<div>
Παράδειγμα: <br>

        <pre>
            &lt;php
            $x = 1;
            do{
            print "x = $x";
            print "<br>";
            $x++;
                }
             while($x <=10 )
            ?>
        </pre>

Αποτέλεσμα: <br>
<?php
    $x = 1;
    do{
        print "x = $x";
        print "<br>";
        $x++;
    }
    while($x <=10 )
?>

</div>
<h3>for</h3>
<div>
Παράδειγμα: <br>
        <pre>
            for($x=1;$x<=10;$x++)
            {
            print "x=$x";
            print "<br>";
            if($x == 5){
            break;
            }
            }
            ?>
            </pre>

            Αποτέλεσμα: <br>
<?php
for($x=1;$x<=10;$x++)
{
    print "x=$x";
    print "<br>";
    if($x == 5){
        break;
    }
}
?>

</div>


<div>

<?php

for($x=10;$x>=1;$x--)
{
    print "x=$x";
    print "<br>";
}

?>


<?php

$x = 2;
do{
    print "x = $x";
    print "<br>";
    $x+=2;
}while($x<=100);

?>

</div>

</body>
</html>
