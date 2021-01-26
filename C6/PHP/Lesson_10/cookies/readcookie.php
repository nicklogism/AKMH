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

<h1> Read Cookie </h1>

<div>
<p>
<?php
if (isset($_COOKIE['testcookie'])) {
    print $_COOKIE['testcookie'];
}else 
print "testcookie not found";
?>
</p>
<?php

if (isset($_COOKIE['listcookie'])){
    foreach ($_COOKIE['listcookie'] as $key=>$val) {
    print "Your $key is $val";
    print '<br>';
    }
} else print "listcookie  not found";

?>
<p>


</p>

</div>
    
</body>
</html>