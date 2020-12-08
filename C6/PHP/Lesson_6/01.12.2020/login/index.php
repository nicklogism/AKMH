<?php
    session_start();
    require_once("conn.php");

    $message = '';

    // if form is submited
    if($_POST){

        // read and filter user input
        $user='';
        if(isset($_POST['user']))
        {
        $user = trim(mysqli_real_escape_string($conn, $_POST['user'])); 
        }

        $pass='';
        if(isset($_POST['pass']))
        {
        $pass = trim(mysqli_real_escape_string($conn, $_POST['pass'])); 
        }

        // if valid data
        if($user && $pass)
        {
            //design query
            $query = "  SELECT * 
                        FROM users 
                        WHERE username='$user' 
                        AND password ='$pass'
                    ";
            // execute query
            $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

            $found = mysqli_num_rows($res);
            if($found)
            {
                // set session variable
                $_SESSION['logged'] = "secret"; 
                // redirect to protected page
                header("location:admin/index.php");
            }
            else
            // set failed login message
            $message = "Login failed. Please try again";
        
        } // if($user && $pass)
    } // if($_POST)
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> LOGIN FORM </title>
<style>
	h1, h2{
		text-align:center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: whitesmoke;
        	
	}
	
	#wrapper{
		border:1px solid gray;
		padding:20px;
        width: 400px;	
        margin:auto;
		background: #336699;
	}

    label{
        display: block;
        margin-top: 20px;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    button{
        display: block;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: auto;
        margin-top: 20px;
        width: 50%;
        padding: 5px;
    }
    form{
        width: 75%;
        margin: auto;
    }
    input{
        width: 100%;
        color: 333;
    }
    #message{
        margin-top: 20px;
        padding: 5px;
        color:#fff;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

</style>
</head>

<body>
<div id="wrapper">
    <h2>LOGIN FORM</h2>

<form method="post" action= "<?php print $_SERVER['PHP_SELF'] ?>" >

<label> Username </label>
<input type="text" name="user" id="user" required > 

<label> Password </label>
<input type="password" name="pass" id="pass" required >

<button type="submit" name="submit" id="submit" > Login </button>

<div id="message">
    <?php print $message ?>
</div>
</form>
</div>



</body>
</html>