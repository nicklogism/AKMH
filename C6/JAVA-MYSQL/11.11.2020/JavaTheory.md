* Ένα object δημιουργείται από μια class.
* Θέλουμε κάθε object να είναι μοναδικό και έτσι πρέπει.
* Κάθε object έχει data. Τα data είναι ποιοτικά χαρακτηριστικά του object.
* Εκτός από Data το Object έχει και methods(πχ τι μπορεί να κάνει ένα αντικείμενο).
* JRE (Java Runtime Environment)
* Netbeans (ως πρόγραμμα εργασιών)


### for

```
for(<αρχική τιμή>; <συνθήκη>; <βήμα>)
{
μπλόκ εντολών;
}
  
```

Το for επαναλαμβάνει την εντολή όσο η συνθήκη είναι αληθής. Με κάθε επανάληψη, εκτελείται το βήμα.

## while

```
while(<συνθήκη>)
{
    μπλόκ εντολών;
}
```

## do while
```
do{
    μπλόκ εντολών;
}while(<συνθήκη>);
```

## JFrame
Όταν δημιουργούμε JFrame τότε ξε-τικάρουμε το "Create main class". Δεν θέλουμε main class στη φόρμα. 
Στις φόρμες τοποθετώ αντικείμενα τα οποία είναι πρακτικά εργαλεία που χρησιμοποιώ. Το όνομα κάθε
αντικειμένου το βλέπουμε στο Properties (δεξιά) και έχουμε τη δυνατότητα να το αλλάξουμε αν θέλουμε. Κάθε ένα από αυτά τα αντικείμενα το χειριζόμαστε με το σύνηθη τρόπο με τον οποίο χειριζόμαστε αντικείμενα. Δηλαδή γράφουμε <το όνομα του αντικειμένου>.<όνομα της method ή των data που θέλουμε να καλέσουμε>.<br>
Το Netbeans έχει βοήθεια και μας λέει τι κάνει κάθε method.

Ο τρόπος για να μετατρέψω ένα String σε κάποιου είδους primitive data (δηλ. int, float, double, char) είναι να καλέσω τη class του primitive data που θέλω (αντίστοιχα integer, double, float, character) και χρησιμοποιώ τη method parse. Άρα Integer.ParseInt για integers, Double.Parsedouble για doubles, κλπ.  Πάντα σαν παράμετρο (δηλαδή μέσα στην παρένθεση) βάζω το string που θέλω. 

Παράδειγμα φόρμας (calculator πρόσθεσης) βρίσκεται στο programs.








