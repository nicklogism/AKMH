<?php
    require_once('conn.php');
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id = '$id' ";
        
        mysqli_query($conn, $query) or die(mysqli_error($conn));
    }

    // redirect to index2
    header("location:index2.php");

?>