/* ΚΛΑΣΕΙΣ & ΔΕΙΚΤΕΣ */

/************** Δυναμική δέσμευση με constructors/destructors *****************/

/*
Όταν το αντικείμενο έχει κατασκευαστή, πρέπει να περάσουμε και τα ορίσματα
στον κατασκευαστή. Ο κατασκευαστής καλείται όταν κάνουμε new.
Ο καταστροφέας καλείται όταν κάνουμε delete.

*/

#include <iostream>
using namespace std;

class dummy {
public:
  dummy(int in_x); // Δήλωση Constructor
  ~dummy(); // Δήλωση Destructor
private:
  int x;

};

int main ()
{
  // Δείκτης p. Δεν δείχνει κάπου προς το παρόν, αλλά δεσμεύουμε το χώρο.
  dummy *p = NULL;

  // Δυναμική δέσμευση (constructor call). Εφόσον παίρνει όρισμα το καταχωρούμε.
  p = new dummy(5); // Ενεργοποίηση δείκτη.

  // Έλεγχος δέσμευσης.
  if(!p) cout <<"Error allocating memory";

  // Απελευθέρωση μνήμης (destructor call)
  delete p;

  return 0;
}

// Συνάρτηση constructor
dummy::dummy(int in_x)
{
  x = in_x;
  cout << "Constructing...";
}

// Συνάρτηση destructor
dummy::~dummy()
{
  cout << endl << "Destructing...";
}
