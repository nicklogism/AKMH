<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>

<body>
    <h1>
        Post Method <br>
        <hr>
        <form action="" method="POST">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <br>
            <button type="submit"> Login </button>
        </form>
       

        <?php
        // Φτιάχνουμε μια δική μας function για την ασφάλεια του $_POST
        function strip_post($field)
        {
            if (!isset($_POST[$field])) $_POST[$field] = '';
            return htmlspecialchars(stripslashes($_POST[$field]));
        }
        echo '<br>';
        if (isset($_POST['username']))
            echo "Username: " . strip_post('username');
        echo '<br>';
        if (isset($_POST['password']))
            echo "Password: " . strip_post('password');
        ?>
        
    </h1>

</body>

</html>