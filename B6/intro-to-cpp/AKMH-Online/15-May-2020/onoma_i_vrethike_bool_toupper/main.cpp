/*Lesson 15.05.2020 N.Kont. - Online*/

/*Σημειώσεις:
Γράψτε πρόγραμμα το οποίο θα δέχεται όνομα και επώνυμο και θα επιστρέφει
σε ποια γραμμή βρίσκεται το γράμμα i.
Αν δεν υπάρχει να επιστρέφει μήνυμα ότι δεν βρέθηκε.
Επίσης, να μετατρέπει το πρώτο χαρακτήρα από το όνομα σε κεφαλαίο
και να επιστρέφει το αποτέλεσμα.

toupper(): Μας επιτρέπει να επιστρέψουμε κάτι σε κεφαλαίο

*/

#include <iostream>
#include <string>
using namespace std;

int main()
{
  string onoma,epwnymo;
  bool vrethike=true; // Θέτουμε bool=true για να κάνουμε έλεγχο παρακάτω με if. 

  cout << "Dwse to onoma sou" << endl;
  getline(cin, onoma);
  cout << "Dwse to epwnymo sou " << endl;
  getline(cin, epwnymo);
  onoma[0] = toupper(onoma[0]); // Χειρισμός του string onoma ως πίνακα. Μετατροπή του πρώτου χαρακτήρα σε κεφαλαίο.
  for(int i=0; i<=onoma.length();i++)
  {
    if(onoma[i] == 'i')
    cout << "To i vrethike sto onoma sth grammi: " << i+1 << endl;
  }

  if(vrethike==false)
  cout << "To i den vrethike" << endl;

  cout << "To onoma einai: " << onoma << endl;

return 0;
}
