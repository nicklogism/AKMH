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
        h1,
        h2,
        h3 {
            text-align: center;
            font-family: Tahoma, Geneva, Verdana, sans-serif;

        }

        td {
            text-align: justify;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
        }

        th {
            text-align: justify;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
        }

        #votes {
            text-align: center;
        }

        #poll {
            margin-left: auto;
            margin-right: auto;
        }

        .even {
            background: whitesmoke;
        }

        .odd {
            background: silver;
        }

        #submit {
            display: block;
            padding: 10px 20px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: black;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px #999;
        }

        .centered {
            position: absolute;
            top: 57%;
            left: 47%;
        }

        .message {
            text-align: center;
            padding-top: 10%;
            font-weight: bold;
        }

        .bara {
            background-image: linear-gradient(to right, yellow, orange, red);
            height: 16px;
        }
    </style>
</head>

<body>

    <h2> Έρευνα </h2>
    <h3> Ψηφίστε το πιο Cool Game Ever</h3>

    <form action="<?php print  $_SERVER['PHP_SELF'] ?>" method="post">
        <table id="poll" cellpadding="10" width="60%">

            <thead>
                <tr>
                    <th>Game</th>
                </tr>
            </thead>

            <?php

            if ($_POST) {
                $id = $_REQUEST['id'];

                $query = "UPDATE poll SET votes = votes+1 WHERE id = $id";
                //echo $query;  
                mysqli_query($conn, $query) or die($query . "  " . mysqli_error($conn));
                $message = "VOTE SUBMITED SUCCESFULLY";
            }

            $bg = '';
            $query = "SELECT * FROM poll ";
            $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($res)) {
                $id         = $row['id'];
                $name       = $row['name'];
                $votes      = $row['votes'];

                if ($bg == 'even') {
                    $bg = 'odd';
                } else {
                    $bg = 'even';
                }
            ?>

                <tr>
                    <td class='<?= $bg ?>'>
                        <input name="id" type="radio" value="<?= $id ?>">
                        <?= $name ?>
                    </td>
                </tr>
            <?php
            } // end while
            ?>
        </table>
<div class="centered">
        <div class="button">
            <button type="sumbit" name="votes" id="submit">Vote</button>
        </div>
        </div>
    </form>
    <div class="message">
        <?= $message ?>
    </div>

    <table id="poll" cellpadding="10" width="60%">

<thead>
    <tr>
        <td> <b>GAME</b> </td>
        <td>  </td>
        <td> </td>
        
    </tr>
</thead>

<?php

if ($_POST) {
    $id = $_REQUEST['id'];

    $query = "UPDATE poll SET votes = votes+1 WHERE id = $id";
    //echo $query;  
    mysqli_query($conn, $query) or die($query . "  " . mysqli_error($conn));
    $message = "VOTE SUBMITED SUCCESFULLY";
}

$bg = '';
$votes_sum_query = "SELECT sum(votes) as sum_votes FROM poll ";
$res = mysqli_query($conn, $votes_sum_query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($res);
$totalVotes = $row['sum_votes'];
$query = "SELECT * FROM poll";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_assoc($res)) {
    $name       = $row['name'];
    $votes      = $row['votes'];
    $percentage = number_format((($votes/$totalVotes) * 100), 2);
    $graphWidth = round($percentage).'px'; 

    if ($bg == 'even') {
        $bg = 'odd';
    } else {
        $bg = 'even';
    }
?>

    <tr>
        <td class='<?= $bg ?>'>
            <?= $name ?>
        </td>
        <td> <div class="bara" style="width:<?= $graphWidth ?>" >  </div> </td>
        <td> <?= $percentage ?>% </td>
    </tr>
<?php
} // end while
?>
</table>
</body>

</html>