<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> PHP Arrays (Διατάξεις) </title>
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
    <h1>PHP Arrays (Διατάξεις)</h1>
    <div>
    <p>Οι διατάξεις χρησιμοποιούνται για την οργάνωση και αποθήκευση δεδομένων.<br>
    Βασίζονται στη χρήση δεικτών πράγμα που σημαίνει ότι κάθε στοιχείο αποτελείται από ένα κλειδί
    και μια αντίστοιχη τιμή.<br>
    Το ρόλο του δείκτη παίζει το κλειδί το οποίο μπορεί να είναι ακέραιος ή αλφαριθμητικό. 
    </p>

    <h2>Indexed arrays (διατάξεις με αριθμητικό δείκτη)</h2>
    
    <p> Ο κώδικας βρίσκεται στο αρχείο php </p>
    Αποτέλεσμα: <br>
    <?php
        print "Aρχικοποίηση διάταξης";
        print "<br>";
        //αρχικοποίηση διάταξης
        $pets = array("dog","cat","mouse");
        print "Eναλλακτικός τρόπος";
        print "<br>";
        //εναλλακτικός τρόπος γραφής
        $pets = ["dog","cat","mouse"];

        print "Eκτύπωση πρώτου στοιχείου";
        print "<br>";
        //εκτύπωση πρώτου στοιχείου
        print "pets[0]=".$pets[0];
        print "<br>";

        //προσθήκη στοιχείου στο τέλος του πίνακα
        array_push($pets, "horse");
        //εναλλακτικά
        $pets[] = "fish";

        //εκτύπωση πλήθους περιεχομένων
        print "number of pets=".count($pets);
        print "<br>";

        print "Εκτύπωση περιεχομένων (developer mode only)";
        print "<br>";
        print "<br>";
        //εκτύπωση περιεχομένων (developer mode only)
        print "pets array = <br>";
        print "<pre>";
        print_r($pets);
        print "</pre>";

        print "Εκτύπωση περιεχομένων front-end με for"; 
        print "<br>";
        print "<br>";
        // εκτύπωση περιεχομένων front-end
        $num = count($pets);
        for($i=0; $i<$num; $i++)
        {
            print $pets[$i];
            print "<br>";

        }

        // αλλαγή τιμής σε ορισμένη θέση του πίνακα
        $pets[2] = "pig";
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";

        //προσθήκη στοιχείου στην αρχή
        array_unshift($pets, "mouse");
        print "Inserted a mouse in position 0";
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";

        // αύξουσα ταξινόμηση
        sort($pets);
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";

        //φθίνουσα ταξινόμηση
        rsort($pets);
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";

        //ανακατανομή με τυχαία σειρά
        shuffle($pets);
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";

        //διαγραφή στοιχείου πίνακα 
        unset($pets[0]);
        print "<pre>";
        print_r($pets);
        print "</pre>";
        print "<br>";      
    ?>
    </div>

    <div>
    <h2> Associative arrays (σχεσιακές διατάξεις) </h2>

    <?php

    $pets_assoc = ["dog"=>"Pluto", "cat"=>"Tom", "mouse"=>"Jerry"];
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>";  

    print "Εκτύπωση περιεχομένων με foreach (front-end)"; 
    print "<br>";
    print "<br>";
    
    // εκτύπωση περιεχομένων front-end με foreach
    foreach($pets_assoc as $pet){
        print $pet;
        print "<br>";
    }
    print "<br>";

    // Εκτύπωση περιεχομένων με foreach (front-end)
    print "Εκτύπωση περιεχομένων με foreach (front-end)"; 
    print "<br>";
    print "<br>";
    foreach($pets_assoc as $key=>$val){
        print $key.'='.$val;
        print "<br>";
    }
    print "<br>";

    /* προσθήκη στοιχείου στον πίνακα εάν το κλειδί δεν υπάρχει
    ή αλλαγή τιμής του στοιχείου εάν το κλειδί υπάρχει
    */

    $pets_assoc['duck']='Donald';
    print "Added duck named ".$pets_assoc['duck'];
    print "<br>";

    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    $pets_assoc['duck']='Duffy';
    print "Changed duck named to ".$pets_assoc['duck'];

    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Προσθήκη στοιχείου [horse] στον πίνακα"; 
    print "<br>";
    // Προσθήκη στοιχείου στον πίνακα
    $pets_assoc['horse'] = 'Dolly';
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Διαγραφή στοιχείου [horse]"; 
    print "<br>";
    // Διαγραφή στοιχείου
    unset($pets_assoc['horse']);
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Αύξουσα ταξινόμηση κατά κλειδί (by key)"; 
    print "<br>";
    // Αύξουσα ταξινόμηση κατά κλειδί
    ksort($pets_assoc);
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Φθίνουσα ταξινόμηση κατά κλειδί (by key)"; 
    print "<br>";
    // Φθίνουσα ταξινόμηση κατά κλειδί
    krsort($pets_assoc);
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Αύξουσα ταξινόμηση κατά τιμή (by value)"; 
    print "<br>";
    // Αύξουσα ταξινόμηση κατά τιμή
    arsort($pets_assoc);
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 

    print "Φθίνουσα ταξινόμηση κατά τιμή (by value)"; 
    print "<br>";
    // Φθίνουσα  ταξινόμηση κατά τιμή
    arsort($pets_assoc);
    print "<pre>";
    print_r($pets_assoc);
    print "</pre>";
    print "<br>"; 
    ?> 
    </div>

    <div>
    
    <h2> Multi-Dimensional Arrays (Πολυδιάστατες διατάξεις)</h2>

    <?php

    $pets_multi = array(

        "dogs"=>array(

            "Pluto"=>array(
                "Comic"=>"Mickey Mouse",
                "Color"=>"Yellow"

            ),
            "Rantaplan"=>array(
                "Comic"=>"Lucky Luke",
                "Color"=>"Brown"

            ),
            "Milou"=>array(
                "Comic"=>"Tin Tin",
                "Color"=>"White"
            )

        ),
        "cats"=>array(

            "Tom"=>array(
                "Comic"=>"Tom & Jerry",
                "Color"=>"Grey-White"
            ),

            "Sylvester"=>array(
                "Comic"=>"Looney Tunes",
                "Color"=>"Black-White"
            ),

            "Garfield"=>array(
                "Comic"=>"Garfield",
                "Color"=>"Orange"
            )

        )
            );

    print "<pre>";
    print_r($pets_multi);
    print "</pre>";
    print "<br>"; 

    /* Άσκηση 1
    Εκτύπωση κόμικ που ήταν χαρακτήρας ο Pluto

    */

    

    print "Άσκηση 1"; 
    print "<br>"; 
    print "Εκτύπωση κόμικ που ήταν χαρακτήρας ο Pluto";
    print "<br>"; 
    print "<br>"; 
    
    print_r($pets_multi['dogs']['Pluto']['Comic']);

    print "<br>"; 
    print "<br>"; 


    /* Άσκηση 2
    Εκτύπωση όλων των σκύλων και των χαρακτηριστικών τους με foreach
    */
    print "Άσκηση 2"; 
    print "<br>"; 
    print "Εκτύπωση όλων των σκύλων και των χαρακτηριστικών τους με foreach";
    print "<br>"; 
    print "<br>"; 

    foreach($pets_multi['dogs'] as $pet=>$props){
        print "Pet: $pet <br>";
            foreach($props as $propName => $propVal){
                print  "$propName : $propVal <br>";
            }
        print "<br>";
    }
    ?>
    </div>

</body>
</html>