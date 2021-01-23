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

        .even {
            background: whitesmoke;
        }

        .odd {
            background: silver;
        }

        #submit {
            display: inline-block;
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
            position: fixed;
            top: 57%;
            left: 47%;
        }

        .message {
            text-align: center;
            padding-top: 10%;
            font-weight: bold;
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
                    <td id="votes" class='<?= $bg ?>'>
                        <?php echo $votes ?>
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
</body>

</html>