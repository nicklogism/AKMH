<?php

session_start();
$letters = ["Α", "Β", "Γ", "Δ", "Ε", "Ζ", "Η", "Θ", "Ι", "Κ", "Λ", "Μ", "Ν", "Ξ", "Ο", "Π", "Ρ", "Σ", "Τ", "Υ", "Φ", "Χ", "Ψ", "Ω"];
if (!isset($_SESSION['newword'])) $_SESSION['newword'] = true; // για να μην αλλάζει η λέξη συνεχώς
if (!isset($_SESSION['letters'])) $_SESSION['letters'] = []; // για να κρατάμε τα γράμματα στο SESSION

if (isset($_GET['letter'])) { // Προσθέτουμε κάθε φορά το γράμμα στο SESSION['letters']
    array_push($_SESSION['letters'], $_GET['letter']);
} else { // αλλιώς εάν δεν σταλεί γράμμα (πχ πατηθεί το κουμπί Νέο Παιχνίδι) μηδένισε τα όλα
    $_GET['letters'] = '';
    $_SESSION['letters'] = [];
    $_SESSION['tries'] = 7;
    $_SESSION['newword'] = true;
}

if ($_SESSION['newword']) {  //τα παρακάτω τρέχουν μόνο ΑΝ έχει οριστεί το newword(αλλάζει η λέξη)
    $words = ["ΚΛΙΜΑΚΑ", "ΘΑΜΠΩΝΩ", "ΣΤΕΓΑΖΩ", "ΣΤΕΦΑΝΙ", "ΣΚΕΠΑΖΩ", "ΧΟΡΤΑΡΙ", "ΒΑΡΒΑΡΟΣ", "ΠΛΟΥΣΙΟΣ", "ΠΡΟΕΚΤΑΣΗ", "ΣΥΝΕΠΗΣ", "ΜΑΝΤΑΡΙΝΙ", "ΠΑΡΑΜΟΝΗ", "ΚΕΛΙ", "ΚΕΝΤΡΙΖΩ", "ΑΠΟΘΗΚΕΥΣΗ", "ΑΠΗΧΗΣΗ", "ΒΑΘΜΟΛΟΓΩ", "ΑΚΡΙΔΑ", "ΤΑΠΕΙΝΩΝΩ", "ΑΚΟΗ", "ΑΝΑΚΑΛΥΠΤΩ", "ΣΥΝΟΡΟ"];
    $randIndex = array_rand($words); // τυχαίες λέξεις
    $_SESSION['word'] = $words[$randIndex];
    $_SESSION['newword'] = false; // κρατάμε τη λέξη στο SESSION
}

// Σπάμε τη λέξη σε array απο γράμματα (με υποστήριξη Unicode για Ελληνικά)
$wordarray = preg_split('//u', $_SESSION['word'], 0, PREG_SPLIT_NO_EMPTY);

if (!isset($_SESSION['tries'])) $_SESSION['tries'] = 7;
// Αν έχει σταλεί γράμμα και δεν υπάρχει στο wordarray τότε μόνο μείωσε τις προσπάθειες
if (isset($_GET['letter']) && !in_array($_GET['letter'], $wordarray)) {
    $_SESSION['tries']--;
} 






?>
<!DOCTYPE html>
<html lang="en">

<style>
    h1,
    h2 {
        text-align: center;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Κρεμάλα</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Κρεμάλα</h1>
        <hr>
        <h1>
            <?php
            $found = true;
            foreach ($wordarray as $l) {
                if (in_array($l, $_SESSION['letters'])) echo $l;
                else {
                    echo '_ ';
                    $found = false;
                }
            }
            ?></h1>
        <h1>
            <?php
            // παίρνουμε το κάθε γράμμα από τον πίνακα letters και το εμφανίζουμε ως κουμπί, χωρισμένα σε 6αδες (%6)
            foreach ($letters as $index => $letter) : ?>
                <?php if ($index % 6 == 0) echo '<br>' ?>
                <!-- Αν το κουμπί έχει επιλεχθεί(σταλεί) τότε απενεργοποιησέ το -->
                <?php if (in_array($letter, $_SESSION['letters'])) : ?>
                    <button class="btn btn-danger"><?= $letter ?></button>
                <?php else : ?>
                    <!--αλλιώς -->
                    <!-- στέλνουμε τη πληροφορία στον SERVER με μια GET Method(a href link) -->
                    <a href="<?= $_SERVER['PHP_SELF'] ?>?letter=<?= $letter ?>"> <button class="btn btn-info"><?= $letter ?></button></a>
                <?php endif ?>
            <?php endforeach ?>
        </h1>
        <h2><br>
            <?php
            if ($found) {
                echo 'ΚΕΡΔΙΣΑΤΕ!';
                $_SESSION['newword'] = true;
            } else {

                if ($_SESSION['tries'] <= 0) {
                    $_SESSION['tries'] = 7;
                    $_SESSION['letters'] = [];
                    echo 'Δυστυχώς χάσατε... Η λέξη είναι η: ' . $_SESSION['word'];
                    $_SESSION['newword'] = true;
                } else {
                    echo ' Έχετε ακόμα ' . $_SESSION['tries'] . ' προσπάθειες';
                }
            }
            ?>
        </h2>

        </h2 class="buttonize">
        <a href="<?= $_SERVER['PHP_SELF'] ?>"> <button class="btn btn-primary">Νέο Παιχνίδι</button></a>
        </h2>

    </div>
</body>


</html>