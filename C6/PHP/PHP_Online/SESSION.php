<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <?php
    function strip_post($field)
    {
        if (!isset($_POST[$field])) $_POST[$field] = '';
        return htmlspecialchars(stripslashes($_POST[$field]));
    }
    // Όταν μας στείλει το username το κρατάμε στο $_SESSION
    if (isset($_POST['username'])) {
        $_SESSION['username'] = strip_post('username');
    }

    if (!isset($_SESSION['counter']))
        $_SESSION['counter'] = 1;
    else
        $_SESSION['counter']++;
    ?>

    <div class="container">
        <h1>
            Session <br>
            <hr>
            <?php   // Θα μας εμφανίζει τη φόρμα μόνο αν δεν υπάρχει username στο $_SESSION 
            if (!isset($_SESSION['username'])) : ?>
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Το όνομα σας">
                    <button class="btn btn-primary">
                        Submit
                    </button>
                </form>
            <?php endif ?>
            <?php // Για να εκτυπώσει την πληροφορία που έχει κρατήσει στο $_SESSION
            if (isset($_SESSION['username'])) echo $_SESSION['username'];
            echo '<br>';
            if (isset($_SESSION['counter'])) echo "έχεις επισκεφτεί τη σελίδα " . $_SESSION['counter'] . " φορές";


            echo '<br><br>';
            echo "Session ID: " . session_id();
            ?>


        </h1>

</body>

</html>