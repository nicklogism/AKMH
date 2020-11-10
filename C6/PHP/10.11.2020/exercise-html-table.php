<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ΔΗΜΙΟΥΡΓΙΑ ΠΙΝΑΚΑ(ΗΜΕΡΟΛΟΓΙΟ) HTML ΣΕ PHP </title>
<style>
	td{
		text-align:center;	
	}

</style>
</head>

<body>

<?php
 
    $days=1;
    print '<table width="50%" border="1" align="center" cellpadding="10">';

    for ($row=1; $row <= 5; $row++) 
    { 
        print "<tr>";
        for ($col=1; $col <= 7; $col++) 
        {
            if($days >=1 && $days <=31)
            {
                print "<td>$days</td>";
            }
            else
                print "<td>&nbsp;</td>";
            $days++;
		}
	  	print "</tr>";
	}
    print "</table>";
?>
    </body>
    </html>

