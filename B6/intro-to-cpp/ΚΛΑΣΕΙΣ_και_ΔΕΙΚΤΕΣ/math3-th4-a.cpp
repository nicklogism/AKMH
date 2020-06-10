/* ΚΛΑΣΕΙΣ και ΔΕΙΚΤΕΣ */

/****************** Κλάσεις που περιέχουν δείκτες *****************************/

/*
Ένας δείκτης είναι απλά μια μεταβλητή, οπότε μπορεί να είναι μέλος σε μια κλάση.
*/


#include <iostream>
using namespace std;

class dummy{
public:
  dummy(); // Constructor χωρίς ορίσματα
  ~dummy(); // Destructor χωρίς ορίσματα
  void set_val(int in_val); // setter
  int get_val() const; // getter
private:
  int *p_val; // private member - pointer. Ο δείκτης θα κάνει δυν.δέσμευση μνήμης
};

int main()
{
  dummy ob; // Δήλωση αντικειμένου
  /* Κατά τη δήλωση του αντικειμένου δεσμεύτηκε χώρος στη μνήμη για το ιδιωτικό
  μέλος της κλάσης {*p_val} και έπειτα μέσω του κατασκευαστή δεσμεύει το χώρο
  στον σωρό (heap) */

  ob.set_val(3); // Θέτουμε τιμή μέσω του setter

  cout << endl << ob.get_val() << endl; // Εκτυπώνουμε μέσω του getter

  return 0;
}

//Συνάρτηση Constructor
dummy::dummy()
{
  p_val = new int;
  if (!p_val) cout <<"Error allocating memory";

  cout<<"Constructing...";
}

// Συνάρτηση Destructor
dummy::~dummy()
{
  delete p_val;
  cout <<"Destructing...";
}

// setter - δεν επιστρέφει κάτι, αλλά θέτει τιμή
void dummy::set_val(int in_val)
{
  *p_val = in_val;
}

// getter - επιστρέφει ακέραια τιμή
int dummy::get_val() const
{
  return *p_val;
}
