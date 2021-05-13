<?php
	session_start();
	$message = '';
	
	if($_POST){
		$result = $_POST['captcha'];
		print "session_result = ".$_SESSION['result'];
		print "<br>";
		print "result = $result";
		if($result == $_SESSION['result']){
			$message = "BRAVO!";
		} 
		else {
			$message = "LOUMIDIS";
		}
	}
		
	$val1 = rand(0, 10);
	$val2 = rand(0, 10);
	$_SESSION['result'] = $val1+$val2;
	
	
?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Php Captcha </title>
		<style>
			label{
				display:block;
				margin-bottom:10px;
			}
			
			input{
				padding:5px;
				margin-bottom:10px;
			}
			
			button{
				display:block;
			}
			
			#wrapper{
				width:400px;
				margin:auto;
				border:1px gray solid;
				padding:20px;
			}
		</style>
		
	</head>
	
	<body>
	
		<div id="wrapper">
			<h2> Please answer the question </h2>
			<div id="message"> <?= $message ?> </div>
			
			<form action="<?php print $_SERVER['PHP_SELF'] ?>" method="post">
				
				<label for="captcha" id="question"> 
					Πόσο κάνει <?= $val1 ?> + <?= $val2 ?> ? 
				</label>
				<input type="number" name="captcha" id="captcha" required>
				
				<button type="submit" id="submit"> Submit </button>
				
			</form>
		</div>
		
		
	</body>
</html>