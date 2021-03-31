### Check if number is even or odd
Αν η Bitwise OR αυξήσει τον αριθμό κατά ένα και ο αριθμός αλλάξει τότε είναι σίγουρα ζυγός (even). Αυτό συμβαίνει μόνο με τους ζυγούς αριθμούς και είναι αποδεδειγμένο. Δηλ. αν ο αριθμός είναι ζυγός(even) με την Bitwise OR θα αλλάξει σε μονό(odd). Το ίδιο δεν συμβαίνει με τους μονούς αριθμούς. Δηλ. αν είναι odd με Bitwise OR θα παραμείνει odd. Οπότε η if εξετάζει ακριβώς αυτό. 
**Παράδειγμα**
// Variable to be checked
        int n = 100;
  
        // Condition check
        // if n|1 (Bitwise OR) είναι μεγαλύτερο από τον αριθμό, δηλ. ο αριθμός έχει αυξηθεί, τότε ο αριθμός είναι ζυγός.
        if ((n | 1) > n) {
            System.out.println("Number is Even");
        }
        else {
            System.out.println("Number is Odd");
        }
    }