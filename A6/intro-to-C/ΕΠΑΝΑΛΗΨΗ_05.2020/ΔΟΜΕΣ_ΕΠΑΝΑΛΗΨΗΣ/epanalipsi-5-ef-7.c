/*ΔΟΜΕΣ ΕΠΑΝΑΛΗΨΗΣ*/
/*
Κατασκευάστε πρόγραμμα που:
α) Προτρέπει τον χρήστη να εισάγει έναν αριθμό Ν. Ο αριθμός Ν να είναι μεταξύ
2 και 20.

β) Έπειτα να διαβάζει από την είσοδο και να εισάγει Ν αριθμούς σε έναν
μονοδιάστατο πίνακα.

γ) Τέλος, να βρίσκει και να τυπώνει τον ελάχιστο από τους Ν αριθμούς.

Επειδή δεν έχουμε μάθει ακόμη περί δυναμικής δέσμευσης μνήμης, δεσμεύουμε πάντα
τον μέγιστο αριθμό. Στη περίπτωση αυτή 20.

*/
#include <stdio.h>
#define SIZE 20

int main()
{
  int arr[SIZE];
  int i,min;
  int N;

  /******************** Εισαγωγή του Ν από 2...20 **************************/

  do {
    printf("Εισάγετε το Ν (από 2-20): ");
    scanf("%d",&N);
  } while(N<2 || N>20);

  /*********************** Γέμισμα πίνακα *****************************/

  for(i=0; i<N; i++)
  {
    printf("Δώσε τον %d-o αριθμό: ", i+1);
    scanf("%d",&arr[i]);
  }

/*********************** Υπολογισμός ελαχίστου *****************************/

  min=arr[0]; // ορίζουμε το ελάχιστο
  for(i=1; i<N; i++) // προσοχή ότι ξεκινάμε από το 1ο στοιχείο αφού min=arr[0];
  {
    if(arr[i]<min)
    {
      min=arr[i];
    }
  }
  printf("Ο ελάχιστος είναι το %d", min);


  return 0;
}
