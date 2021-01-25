<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

    <h1>Date!</h1>
    <hr>
    <h1>
        <pre>
            <?php
            // $newtime = strtotime('+1 month');
            date_default_timezone_set('Europe/Athens');
            echo date('d m Y - H:i', $newtime);
            ?>

        </pre>
    </h1>
</body>

</html>