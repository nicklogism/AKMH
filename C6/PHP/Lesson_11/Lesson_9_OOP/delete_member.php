<?php
    require_once('conn.php');
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id = '$id' ";
        $mysqli->query($query) or die($mysqli->error);
       
    }

    // redirect to index2
    header("location:index2.php");

?>