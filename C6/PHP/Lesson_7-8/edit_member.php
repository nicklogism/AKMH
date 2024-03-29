<?php
    require_once('conn.php');
    error_reporting(E_ALL & ~E_NOTICE);
    $message = '';
    
        $id = '';
        $firstname = '';
        $lastname = '';
        $email = '';
        $username = '';
        $password = '';
        $pic = '';
        $pic_tag = '';


    if($_POST){
        $id         = $_REQUEST['id'];
        $firstname  = $_REQUEST['firstname'];
        $lastname   = $_REQUEST['lastname'];
        $email      = $_REQUEST['email'];
        $username   = $_REQUEST['username'];
        $password   = $_REQUEST['password'];
        $pic        = $_REQUEST['pic'];

        $query = "UPDATE users SET 
                firstname='$firstname', 
                lastname='$lastname', 
                email='$email', 
                username='$username', 
                password='$password'
                WHERE 
                id = '$id' 
                ";

        mysqli_query($conn, $query) or die($query."  ".mysqli_error($conn));
        $message = "RECORD UPDATED SUCCESFULLY!";
    }
    
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM users WHERE id = '$id' ";
        $res =  mysqli_query($conn, $query) or die(mysqli_error($conn));
        while($row = mysqli_fetch_assoc($res)){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $username = $row['username'];
            $password = $row['password'];
            $pic = $row['pic'];
            $pic_tag = '';
            if($pic) {
                $pic_tag = "<img src = '$pic'>";
            }
        }
       
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Edit Member Form </title>
<style>
	h1, h2{
		text-align:center;	
		font-family:Tahoma;
        color: #fff;
	}

    #wrapper{
        width: 600px;
        margin: auto;
        background-color: #336699;
        padding: 20px;
        box-sizing: border-box;
    }

    #wrapper2{
        margin: auto;
        width: 44%;
        padding: 10px;
        text-align: center;
    }
    
    #text1{
        padding: 15px;
        text-align: left;
    }

    #text2{
        padding: 15px;
        text-align: right;      
    }

    form{
        width: 300px;
        margin: auto;
    }

    form label{
        display: block;
        margin-top: 20px;
        color: #fff;
        font-family: Tahoma;
        font-size: 14px;
    }

    input{
        width: 95%;
        padding: 5px;
        font-family: Tahoma;
        font-size: 14px;
        color: #555;
    }

    button{
        width: 200px;
        padding: 5px;
        font-family: Tahoma;
        font-size: 14px;
        background-color: whitesmoke;
        color: blue;
        margin-top: 30px;
        margin-left: 20%;
    }

    .message{
        text-align:center;	
		font-family:Tahoma;
        color: #fff;
        font-size: 16px;
        margin-top: 20px;
    }

</style>
</head>

<body>
    <div id="wrapper">
        <h1>Edit Member Form</h1>

        <form action="<?php print  $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <label for="id"> ID </label>
            <input type="text" name="id" id="id" value="<?=$id?>" readonly>

            <label for="firstname"> Firstname </label>
            <input type="text" name="firstname" id="firstname" value="<?=$firstname?>" required>

            <label for="lastname"> Lastname </label>
            <input type="text" name="lastname" id="lastname" value="<?=$lastname?>" required>

            <label for="email"> Email </label>
            <input type="email" name="email" id="email" value="<?=$email?>" required>

            <label for="username"> Username </label>
            <input type="text" name="username" id="username" value="<?=$username?>" required>

            <label for="password"> Password </label>
            <input type="text" name="password" id="password" value="<?=$password?>" required>

            <label for="pic"> Photo </label>
            <input type="file" name="pic" id="pic">
            <div><?=$pic_tag?></div>

            <button type="submit" name="submit" id="submit" > Save </button>
        
        </form>

        <div class="message"> <?= $message ?> </div>
    </div>

    <div id="wrapper2">
    <span id="text1"> <a href="index2.php">View All</a></span>
    <span id="text2"> <a href="add_member.php">Add new member</a></span>
    </div>
   
</body>
</html>