/* ΚΛΑΣΕΙΣ & ΔΕΙΚΤΕΣ */

/***************** Δυναμική δέσμευση μνήμης για Πίνακες **********************/

/*
Χρησιμοποιούμε τους ίδιους τελεστές {new, delete}.

### ΜΟΝΟΔΙΑΣΤΑΤΟΙ ###

**Σύνταξη new**
ptr = new type [n];
Δεσμεύει αντικείμενα n του τύπου type (πχ, int, double) και επιστρέφει έναν
δείκτη σε αυτό το χώρο μνήμης.
Το n δεν χρειάζεται να είναι σταθερά (#define ή const)

**Σύνταξη delete**
delete [] ptr;

*/

#include <iostream>
using namespace std;

int main()
{
  int *arr; // Δήλωση δείκτη
  int n=4; // Δήλωση ακέραιας μεταβλητής

  //Δέσμευση μνήμης
  arr = new int [4];
  if(!arr) cout << "Error allocating memory";

  // Κάποια δουλειά στον πίνακα (πχ γινόμενο)
  for (int i=0; i<n; i++) // στη C++ μπορώ να δηλώσω απευθείας μέσα στη loop τη
  arr[i] = i*i;           // μεταβλητή {int i=0}

  // Εκτύπωση αποτελεσμάτων για κάθε στοιχείο του πίνακα
  for (int i=0; i<n; i++)
  cout << arr[i] << " ";

  // Αποδέσμευση μνήμης
  delete [] arr;

  return 0;

}
