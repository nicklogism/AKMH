/* Παράδειγμα χρήσης δείκτη και πίνακα */
#include <iostream>
using namespace std;

int main()
{
    int a[4] ={0,1,2,3};
    
    int *x;
    x=a; // αυτό γίνεται μόνο σε πίνακες
//    x=&a; // αυτό είναι λάθος! δεν γίνεται σε πίνακα
    *x++; // μετακινούμε τον δείκτη κατά ένα
    x++; // το ίδιο
    x++; // το ίδιο
    
    /*** Ερώτημα στο επόμενο μάθημα σχετικά με τη διαφορά των παραπάνω ***/
    
    cout << *x << endl;
    
    return 0;
}