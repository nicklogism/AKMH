<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

    <h1>Πολύ απλό File Upload</h1>
    <h3>Για περισσότερα βλ. functions.php στο Lesson9</h3>
    <pre>
    <?php
    // Messages
    $fileTooBig = "Το αρχείο υπερβαίνει το επιτρεπτό μέγεθος. Επιλέξτε ένα αρχείο έως 5MB";
    $wrongExtension = 'Επιτρέπονται μόνο αρχεία εικόνας png, jpg, jpeg!';


    if (isset($_FILES['file'])) {
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // έλεγχος για το extension του αρχείου
        if ($_FILES['file']['size'] > 5 * 1024 * 1024) { // έλεγχος για το μέγεθος του αρχείου
            echo $fileTooBig;
        } else if (!in_array($ext, ['png', 'jpg', 'jpeg'])) { // εδώ γράφουμε μόνο τα αρχεία που επιτρέπονται
            echo $wrongExtension;
        } else
            //μετακίνηση          απο 'tmp_name'            σε όνομα original αρχείου στον root κατάλογο. 
            move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }
    ?>
    
    </pre>

    <form action="" method="POST" enctype="multipart/form-data">
        <input class="form-control-lg" id="formFileSm" type="file" name="file" />
        <div>
            <br>
            <button class="btn btn-info">Upload File</button>
        </div>

    </form>

</body>

</html>