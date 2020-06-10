#include <iostream>
#include <cstdlib>
#include <vector>

using namespace std;

int main()
{

vector<int> a(5); 
/* Η αρχικοποίηση γίνεται αυτόματα, για 5 θέσεις που έχουμε δεσμεύσει.
   Για string ή char θα έμπαινε empty string */
    
    vector<int> b(5,66); 
/* Η αρχικοποίηση θα γίνει σε όλες τις θέσεις με τον αριθμό 66. */

    vector<int> c(3,1);
/* Η αρχικοποίηση θα γίνει σε όλες τις θέσεις με τον αριθμό 1. */
  
    vector<int>::iterator x=c.begin();
    advance(x,1);
    
    // Μεταφορά στοιχείων με την copy από vector σε vector, με χρήση inserter.
    copy((b.begin)(),b.end(),inserter(c,x));
    
    /* Μια διαφορετική προσέγγιση της for για εμφάνιση στοιχείων. */ 
    /* Λειτουργεί μόνο με νεότερες εκδόσεις C++ */
    for (int &p : c)
    	cout << p << " " <<endl ;
    
    return 0;
}
