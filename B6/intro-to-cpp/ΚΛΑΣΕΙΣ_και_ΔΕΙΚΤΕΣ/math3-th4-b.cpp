/* ΚΛΑΣΕΙΣ και ΔΕΙΚΤΕΣ */

/****************************** C++ Bug *****************************/

/*
Όταν έχουμε μια κλάση που κάνει δυναμική δέσμευση μνήμης, τότε η αντιγραφή
ενός αντικειμένου (πχ ob1 = ob2) είναι προβληματική.
*/


#include <iostream>
using namespace std;

class dummy{
public:
  // Constructors
  dummy(); // Constructor χωρίς ορίσματα
  ~dummy(); // Destructor χωρίς ορίσματα
  // Accessors
  void set_val(int in_val); // setter
  int get_val() const; // getter
private:
  int *p_val; // private member - pointer. Ο δείκτης θα κάνει δυν.δέσμευση μνήμης
};

int main()
{
  dummy ob1; // Δήλωση αντικειμένου
  dummy ob2;

  ob1.set_val(3);

  ob2 = ob1;

  cout << endl << ob1.get_val() << endl; // Εκτυπώνουμε μέσω του getter
  cout << endl << ob2.get_val() << endl;

  /*
  Σε αυτό το σημείο θα γίνει το destructing όπου θα προκύψει και το πρόβλημα
  (Bug) Double free detected in tcache 2
  Για το πρόβλημα ευθύνεται το shallow copy (bit by bit) το οποίο γίνεται
  μεταξύ των αντικειμένων ob1 ob2. Αυτό γίνεται πάντα με τον τελεστή ανάθεσης
  {=} 
  Έπειτα ο δείκτης θα δείχνει στο χώρο του αντικειμένου ob1 ΧΩΡΙΣ όμως να έχει
  ελευθερωθεί ο χώρος στο ob2. Δηλαδή και οι δυο δείκτες πλέον θα δείχνουν στον
  ίδιο χώρο. Ωστόσο, ο χώρος αυτός φαίνεται κενός με αποτέλεσμα να μη μπορεί
  να γίνει delete (core dumped) και οδηγεί σε memory leak.
  Το πρόβλημα αντιμετωπίζεται με references, copy constructor και overloading
  του {=}
  */
  return 0;
}

//Συνάρτηση Constructor
dummy::dummy()
{
  p_val = new int;
  if (!p_val) cout <<"Error allocating memory";

  cout << "Constructing...";
}

// Συνάρτηση Destructor
dummy::~dummy()
{
  delete p_val;

  cout << "Destructing...";
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
