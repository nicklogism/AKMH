<?php
require_once('conn.php');
$message = '';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Poll </title>
<style>
	h1, h2, h3{
		text-align:center;
        font-family: Tahoma, Geneva, Verdana, sans-serif;
        	
	}
    td{
        text-align: justify;
        font-family: Tahoma, Geneva, Verdana, sans-serif;
    }
    th{
        text-align: justify;
        font-family: Tahoma, Geneva, Verdana, sans-serif;
    }

    #votes {
        text-align: center;
    }
    #voteAgain {
        text-align: center;
        padding-top: 2%;
    }
    .even{
        background:whitesmoke;
    }

    .odd{
        background:silver;
    }
    .button{
        text-align: center;
        padding-top: 2%; 
    }
    .message {
        text-align: center;
        padding-top: 2%;
    }

</style>
</head>

<body>

<h2> Έρευνα </h2>
<h3> Ψηφίστε το πιο Cool Game Ever</h3>

<form action="<?php print  $_SERVER['PHP_SELF'] ?>" method="post">
<table id="poll" cellpadding="10" align="center" width="60%">

<thead>
    <tr>
        <th>Game</th>
        <th id="votes">Votes</th>
    </tr>
</thead>

        <?php

            if($_POST) {
                $id = $_REQUEST['id'];

                $query ="UPDATE poll SET votes = votes+1 WHERE id = $id";   
                //echo $query;  
                mysqli_query($conn, $query) or die($query."  ".mysqli_error($conn));
                $message = "VOTE SUBMITED SUCCESFULLY";         
                } 

            $bg = '';
            $query = "SELECT * FROM poll ";
            $res = mysqli_query($conn, $query) or die(mysqli_error($conn));         
            while($row = mysqli_fetch_assoc($res)) {
                $id         = $row['id'];
                $name       = $row['name'];
                $votes      = $row['votes'];

                if ($bg == 'even'){
                    $bg = 'odd';
                }
                else {
                    $bg = 'even';
                }                       
        ?>
            
            <tr>
                <td class='<?= $bg ?>'>
                <input name="id" type="radio" value="<?= $id ?>">  
                <?= $name ?>
                </td>
                <td id="votes" class='<?= $bg ?>'>                
                <?php echo $votes ?>
                </td>
            </tr>
        <?php    
        }// end while
        ?>
 </table>

<div class="button">
    <button type="sumbit" name="votes" id="submit" >Vote</button> 
</div>
</form>
<div class="message"> 
    <?= $message ?> 
</div>
<div id="voteAgain">
    <a href="index.php">Vote Again</a> 
</div>
</body>
</html>