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

***************************** Εντολή while *****************************

Στη while ελέγχεται πρώτα η συνθήκη και μετά εκτελούνται οι εντολές.

while(συνθήκη)
{
  εντολή ή εντολές;
}

Παράδειγμα:
i=0; j=0; // Αρχικοποίηση
while (i<8) // συνθήκη
{
  j=2*i+1;
  i=i+1;    // αύξηση κατά ένα, αλλιώς ατέρμων βρόχος!
  printf("%d",j);
}

************************ ΣΥΝΟΨΗ ΕΝΤΟΛΩΝ ΕΠΑΝΑΛΗΨΗΣ ************************

Τη for τη χρησιμοποιούμε όταν γνωρίζουμε τον ακριβή αριθμό επαναλήψεων. Δηλαδή,
ποιες τιμές θα πάρει η μεταβλητή.

Τη do..while σε περιπτώσεις αμυντικού προγραμματισμού.

Τη while όταν δεν γνωρίζουμε τον ακριβή αριθμό επαναλήψεων. Δηλαδή τις τιμές
που θα πάρει η μεταβλητή.

*/
#include <stdio.h>

int main()
{
  int i=5; int j=0; // Αρχικοποίηση
  while (i<8) // συνθήκη
  {
    j=2*i+1;
    i=i+1;    // αύξηση κατά ένα, αλλιώς ατέρμων βρόχος!
    printf("%d",j);
  }

  return 0;
}
