<?php
require_once('conn.php');
    $message = '';
    $votes = '';
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
    .even{
        background:whitesmoke;
    }

    .odd{
        background:silver;

    }

</style>
</head>

<body>

<h2> Έρευνα </h2>
<h3> Ψηφίστε το πιο Cool Game Ever</h3>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<table id="poll" cellpadding="10" align="center" width="60%">

    <thead>
        <tr>
            <td></td>
        </tr>
    </thead>

    <tbody>

        <?php
        
        $bg = '';
        //design query
        $query = "SELECT * FROM poll";
        // execute query
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));         
        while($row = mysqli_fetch_assoc($res)){

            $id         = $row['id'];
            $name       = $row['name'];
            $votes     = $row['votes'];

        if ($bg == 'even'){
            $bg = 'odd';
        }
        else {
            $bg = 'even';
        }

/*        if($_POST) {
            $votes     = $_REQUEST['votes'];       
    
            $query = "UPDATE poll SET votes='$votes' WHERE id='$id' ";
    
            mysqli_query($conn, $query) or die($query."  ".mysqli_error($conn));
            $message = "VOTE SUBMITED SUCCESFULLY!";
        }
*/
        ?>
            <tr>
                <td class='<?= $bg ?>'>
                <input name="choice" type="radio" value="<?=$id?>">  
                <?= $name ?> 
                </td>
            </tr>

        <?php    
        }// end while   
        ?>
        
    </tbody>

 </table>
 <div style="text-align:center">
 <button type="sumbit" id="submit">Vote</button>
</div>
<div class="message"> <?= $message ?> </div>
</form>

</body>
</html>