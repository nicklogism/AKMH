/*ΔΟΜΕΣ ΕΠΑΝΑΛΗΨΗΣ*/
/*
Επανάληψη = Το κυριότερο χαρακτηριστικό του προγραμματισμού. Δηλαδή, η εκτέλεση
ενός τμήματος κώδικα πολλές φορές.

Στη γλώσσα C υπάρχουν τρεις τρόποι για να κάνουμε επανάληψη της εκτέλεσης ενός
τμήματος κώδικα:

1) Η εντολή for(...;...;...){...} στην οποία αναφέρουμε πόσες φορές θέλουμε να
εκτελεστεί ένα τμήμα κώδικα.
2) Η εντολή while(...){...}
3) Η εντολή do{...} while(...);

***************************** Εντολή do...while *****************************
i = 0;
do
{
  εντολές;
}
while(συνθήκη);

Τα άγκιστρα υποχρεωτικά, ακόμη και αν η εντολή είναι μια.
Στη do...while θα εκτελεστούν οι εντολές τουλάχιστον μια φορά. Μετά θα ελεγχθεί
η συνθήκη και εφόσον ισχύει θα εκτελεστούν ξανά ωσότου να μην ισχύει η συνθήκη.

int i=0;   // εντολή αρχικοποίησης. Δική μας ευθύνη.
do {
  i = i+1; // εντολή αύξησης κατά ένα. Δική μας ευθύνη.
} while(i>3); // συνθήκη

Προσοχή! Με τη do..while μπορούμε να πέσουμε σχετικά εύκολα σε ατέρμων βρόχο
(infinity loop). Το παρακάτω είναι ένα παράδειγμα:

int i=5;
do {
  i = i+1;
} while(i>3);

Το i θα είναι πάντα μεγαλύτερο του 3.

**Αμυντικός προγραμματισμός**
Τη χρησιμοποιούμε συνήθως για έλεγχο των τιμών που εισάγει ο χρήστης.
Εάν για παράδειγμα θέλουμε να εισάγει τιμές από ένα εύρος τιμών. Αν εισάγει
έξω από αυτό το εύρος, τότε του υποδεικνύουμε να πληκτρολογήσει ξανά.

*/
#include <stdio.h>

int main()
{
  int i;

  do {
    printf("Δώσε έναν ακέραιο από το 1 έως το 100: ");
    scanf("%d", &i);
  } while (i<1 || i>100);

  printf("Εισάγατε τον αριθμό %d μέσα στα όρια 1 έως 100",i);

  return 0;
}
