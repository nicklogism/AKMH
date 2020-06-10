/* Κλάσεις και Δείκτες */
/* Άσκηση Δυναμικός Πίνακας*/
/*
Κατασκευάστε μια κλάση (ARRAY) που να περιτυλίσσει(wrapper) την έννοια του
μονοδιάστατου πίνακα ως εξής:
Να έχει ως μέλη έναν δυναμικό πίνακα (δείκτης) ακεραίων, καθώς και τη
διάσταση του πίνακα.
Ο κατασκευαστής να παίρνει ως όρισμα τη διάσταση του πίνακα και να δεσμεύει
δυναμικά το χώρο που απαιτείται.
Ο καταστροφέας να διαγράφει τη μνήμη που έχει δεσμευτεί δυναμικά.
Να έχει accessors για ένα στοιχείο του πίνακα
  Να τυπώνουν μήνυμα λάθους σε περίπτωση πρόσβασης εκτός ορίων του πίνακα.
Μια μέθοδο print που να τυπώνει τα στοιχεία του πίνακα.

Η συνάρτηση main
Να κατασκευάζει έναν πίνακα της κλάσης με 10 θέσεις
Να αρχικοποιεί τα στοιχεία του πίνακα, ώστε κάθε στοιχείο να έχει το τετράγωνο
της αντίστοιχης θέσης
Να τυπώνει τον πίνακα

Ποιο πρόβλημα υπάρχει με την υλοποίηση; Πότε περιμένουμε ότι το πρόγραμμα αυτό
θα έχει πρόβλημα και θα "σκάσει" κατά το χρόνο εκτέλεσης;
*/

#include <iostream>
using namespace std;

class ARRAY {
public:
  ARRAY(int in_n); // constructor
  ~ARRAY();       // destructor
  void set_i(int i, int val); // setter
  int get_i(int i) const; // getter
  void print(); // print method

private:
  int *p; // δείκτης ακεραίων
  int n; // για τη διάσταση του πίνακα
};

int main()
{
  int n = 10;
  ARRAY pin(n); // Δήλωση πίνακα n θέσεων
//  ARRAY pin2(n); // Δήλωση 2ου πίνακα n θέσεων

  for (int i=0; i<n; i++) // αρχικοποίηση του πίνακα
    pin.set_i(i,i*i); // με τα τετράγωνα των τιμών

/*Αφαίρεσε τα σχόλια που αφορούν τον pin2, για να δεις το πρόγραμμα να "σκάει"*/

/*
  for (int i=0; i<n; i++)
    pin2.set_i(i,i*i);
*/

// pin = pin2; // double free detected in tcache 2

  pin.print(); // εκτύπωση του πίνακα
// pin2.print(); // εκτύπωση του πίνακα

  return 0;
}

ARRAY::ARRAY(int in_n)
{
  n = in_n;
  p = new int [n];
  if(!p)
    cout << "Error allocating memory";
}

ARRAY::~ARRAY()
{
  delete [] p;
}

void ARRAY::set_i(int i, int val)
{
  if (i>=0 && i<n)
    p[i] = val;
  else
    cout << "Error: Out of bounds";
}

int ARRAY::get_i(int i) const
{
  if (i>=0 && i<n)
    return p[i];
  else
    cout << "Error: Out of bounds";
// Θα έπρεπε να επιστρέφει(return) κάτι. Είναι warrning (return-type), όχι error
}

void ARRAY::print()
{
  int i;
  for(i=0; i<n; i++)
  cout << p[i] << " ";
}
