<?php 
session_start();

session_destroy();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Destroy SESSION</title>
<style>
	h1, h2{
		text-align:center;	
	}
	
	div{
		border:1px solid gray;
		padding:10px;	
        margin:auto;
		margin-bottom:10px;
	}
</style>
</head>

<body>
    <h1>Destroy SESSION</h1>
    Παράδειγμα: <br>
    <pre>
        &lt;?php>
        session_start();
        session_destroy();
        ?>
    </pre>
    <div>
        <p>
            Εδώ πλέον το session έχει καταργηθεί. 
            <br>
    <a href="index.php">Κάντε κλικ εδώ</a> για να μεταφερθείτε στην index.php 
    <br>
    ή
    <br>
    <a href="session_2.php">Κάντε κλικ εδώ</a> για να επαληθεύσετε τη κατάργηση του session.
        </p>
    </div>
    
</body>
</html>