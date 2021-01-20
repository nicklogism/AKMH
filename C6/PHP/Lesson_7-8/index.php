<?php
require_once('conn.php');

//design query
$query = "SELECT * FROM users";
// execute query
$res = mysqli_query($conn, $query) or die(mysqli_error($conn)); 

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Catalog members </title>
<style>
	h1, h2{
		text-align:center;
        font-family: Tahoma, Geneva, Verdana, sans-serif;
        color: blanchedalmond;
        	
	}

    #members thead tr{
        background:steelblue;
        color:white;
        font-family: Tahoma, Geneva, Verdana, sans-serif;

    }

    #members tbody tr{
        color:black;
        font-family: Tahoma, Geneva, Verdana, sans-serif;
        font-size:1em;

    }

    .even{
        background:whitesmoke;
    }

    .odd{
        background:silver;

    }

    #members img{
    border-radius: 50%;
    box-shadow: 3px 3px 6px gray;
    }

</style>
</head>

<body>

<h1> Catalog Members </h1>

<table id="members" cellpadding="10" align="center" width="60%">

    <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Username</td>
            <td>Picture</td>
        </tr>
    </thead>

    <tbody>

        <?php
        
        $bg = '';
        while($row = mysqli_fetch_assoc($res)){

            $id         = $row['id'];
            $firstname  = $row['firstname'];
            $lastname   = $row['lastname'];
            $email      = $row['email'];
            $username   = $row['username'];
            $pic        = $row['pic'];
            $pic_tag    = '';
            
        if($pic){
            $pic_tag = "<img src='$pic'>";
        }

        if ($bg == 'even'){
            $bg = 'odd';
        }
        else {
            $bg = 'even';
        }

        print "<tr>";
        print "<td class='$bg'> $id </td>";
        print "<td class='$bg'> $firstname </td>";
        print "<td class='$bg'> $lastname </td>";
        print "<td class='$bg'> $email </td>";
        print "<td class='$bg'> $username </td>";
        print "<td class='$bg'> $pic_tag </td>";
        print "</tr>";
        }
        
        ?>

    </tbody>

 </table>

</body>
</html>
