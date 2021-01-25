<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <?php
    function strip_post($field)
    {
        if (!isset($_POST[$field])) $_POST[$field] = '';
        return htmlspecialchars(stripslashes($_POST[$field]));
    }
    // άδειος πίνακας που κρατάμε τα errors (για να τα εμφανίσουμε)
    $errors = [];
    // Διάφοροι έλεγχοι που κάνουμε

    // Αν το username έχει τεθεί και αν είναι ίσο με 0 χαρακτήρες
    if (isset($_POST['username']) &&  strlen($_POST['username']) == 0) {
        $errors['username'] = "Το όνομα χρήστη είναι απαραίτητο";
        // ή αν (η παραπάνω συνθήκη ικανοποιηθεί και) το username έχει τεθεί και είναι μικρότερο από 4 χαρακτήρες 
    } elseif (isset($_POST['username']) &&  strlen($_POST['username']) < 4) {
        $errors['username'] = "Το όνομα χρήστη πρέπει να είναι τουλάχιστον 4 χαρακτήρες";
    }

    if (isset($_POST['password']) &&  strlen($_POST['password']) < 8) {
        $errors['password'] = "Ο κωδικός χρήστη πρέπει να είναι τουλάχιστον 8 χαρακτήρες";
    }

    ?>
    <h1>
        Form Validation <br>
        <hr>
        <div class="container">
            <form action="" method="POST">

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label<?php if(isset($errors['username']))  echo 'text-danger';?>" >Username</label>
                    <div class="col-sm-7">
                        <input type="text"  name="username" class="form-control<?php if(isset($errors['username']))  echo ' is-invalid '; ?>" id="username" placeholder="Username">
                    </div>
                    <?php if (isset($errors['username'])) : //από εδώ ?> 
                    <div class="col-sm-7">
                        <small id="passwordHelp" class="text-danger">
                            <?php echo $errors['username']; ?>  
                        </small>
                    </div>
                    <?php endif // μέχρι εδώ ?> 
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label<?php if(isset($errors['password']))  echo 'text-danger'; ?>">Password</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" class="form-control<?php if(isset($errors['password']))  echo ' is-invalid '; ?>"  id="inputPassword" placeholder="password">
                    </div>
                <?php // εναλλακτικός τρόπος γραφής της if στην php. Πιο αποδοτικός. Περικλείει μέσα όλο τον κώδικα της html μέχρι να συναντήσει το endif. (Αντί να κάνουμε echo όλο τον κώδικά html). 

                if (isset($errors['password'])) : //από εδώ ?> 
                    <div class="col-sm-7">
                        <small id="passwordHelp" class="text-danger">
                            <?php echo $errors['password']; ?>  
                        </small>
                    </div>
                    <?php endif // μέχρι εδώ ?> 

                </div>
                <button type="submit" class="btn btn-primary"> Login  </button>
            </form>
        </div>
    </h1>

</body>

</html>