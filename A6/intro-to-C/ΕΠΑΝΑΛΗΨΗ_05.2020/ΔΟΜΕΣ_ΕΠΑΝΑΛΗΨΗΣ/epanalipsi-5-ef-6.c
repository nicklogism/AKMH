/*ΔΟΜΕΣ ΕΠΑΝΑΛΗΨΗΣ*/
/*
Κατασκευάστε ένα πρόγραμμα που να προτρέπει το χρήστη να εισάγει 5 ακεραίους
αριθμούς και τους αποθηκεύει σε έναν μονοδιάστατο πίνακα 5 θέσεων. Κάθε ακέραιος
που εισάγει ο χρήστης πρέπει να έχει τιμή από 1 - 8.
Έπειτα υπολογίζει το γινόμενο και το τυπώνει στην οθόνη.

*/
#include <stdio.h>
#define SIZE 5

int main()
{
  int arr[SIZE];
  int i;
  int prod;

  // Αρχικοποίηση πίνακα με εισαγωγή αριθμών από τον χρήστη
    for(i=0; i<SIZE; i++)
    {
      // Συνθήκη αμυντικού προγραμματισμού
      do
      {
        printf("Εισάγετε τον %d-ο αριθμό από 1-8: ",i+1);
        scanf("%d", &arr[i]);
      } while (arr[i]<1 || arr[i]>8);
    }

  // Υπολογισμός γινομένου
  prod=1; // αρχικοποίηση του συσσωρευτή.
  for (i=0; i<SIZE; i++)
  {
    prod*=arr[i]; // ισοδύναμο με prod = prod * arr[i];
  }
  printf("Το γινόμενο είναι: %d", prod);

  return 0;
}
