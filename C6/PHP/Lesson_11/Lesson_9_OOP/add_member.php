<?php
    require_once('conn.php');
    require_once('functions.php');
    //error_reporting(E_ALL & ~E_NOTICE);
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
        $firstname  = $_REQUEST['firstname'];
        $lastname   = $_REQUEST['lastname'];
        $email      = $_REQUEST['email'];
        $username   = $_REQUEST['username'];
        $password   = $_REQUEST['password'];

        $query = "  INSERT INTO users  
                    (firstname , lastname , email , username , password)
                    VALUES              
                    ('$firstname', '$lastname', '$email', '$username', '$password')
                ";

        $mysqli->query($query) or die($mysqli->error);
        $message = "RECORD CREATED SUCCESFULLY!";
    }

    /***************************************************************************/
    $posted = 'pic';
    $img_path = "./pics/";
    if(isset($_FILES[$posted])) {
        // Call upload func from functions.php
        $uploaded_file = upload($posted, $img_path);

        if($uploaded_file) {
            $query = "UPDATE users SET pic = '$uploaded_file' WHERE email = '$email' ";
            $mysqli->query($query) or die($mysqli->error);
        }
        else {
            $message .=" - Image failed to upload";
        }
    } // if $_POST 
    /***************************************************************************/
    
    
    if(isset($_REQUEST['email']))
    {
        $email = $_REQUEST['email'];
        $query = "SELECT * FROM users WHERE id = '$id' ";
        $res =  $mysqli->query($query) or die($mysqli->error);
        while($row = $res->fetch_assoc()){
            $id = $row['id'];
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
<title> Add Member Form </title>
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
        <h1>Add Member Form</h1>

        <form action="<?php print  $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <label for="firstname"> Firstname </label>
            <input type="text" name="firstname" id="firstname" value="<?=$firstname?>" required>

            <label for="lastname"> Lastname </label>
            <input type="text" name="lastname" id="lastname" value="<?=$lastname?>" required>

            <label for="email"> Email </label>
            <input type="email" name="email" id="email" value="<?=$email?>" required>

            <label for="username"> Username </label>
            <input type="text" name="username" id="username" value="<?=$username?>" required>

            <label for="password"> Password </label>
            <input type="password" name="password" id="password" value="<?=$password?>" required>

            <label for="pic"> Photo </label>
            <input type="file" name="pic" id="pic">
            <div><?=$pic_tag?></div>

            <button type="submit" name="submit" id="submit" > Save </button>
        
        </form>

        <div class="message"> <?= $message ?> </div>
    </div>

    <div id="wrapper2">
    <span id="text1"> <a href="index2.php">View All</a></span>
    </div>
   
</body>
</html>