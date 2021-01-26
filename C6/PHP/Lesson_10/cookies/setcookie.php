<?php

$content = 'Hello World';
// $expire = time() + 3600 * 24; // 1 day cookie life
$expire = time() + 60; // 1 minute cookie life

setcookie("testcookie", $content, $expire);

setcookie("listcookie[name]", "Sakis Rouvos", $expire); 
setcookie("listcookie[email]", "SRouvos@gmail.gr", $expire); 
setcookie("listcookie[age]", "45", $expire); 

?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
h1{
    text-align: center;
}

div {
    width: 400px;
    margin: auto;
    padding: 20px;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetCookie</title>


</head>
<body>

<h1> Set Cookie </h1>

<div>
<p>Εδώ δημιουργήθηκε τα cookie "setcookie" και "listcookie"</p>

<p>
Κάντε 
<a href="readcookie.php">κλικ εδώ</a>
για να ανακατευθυνθείτε στη σελίδα που θα τα χρησιμοποιήσει.
</p>

</div>
    
</body>
</html>