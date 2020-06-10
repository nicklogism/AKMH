/* Παράδειγμα χρήσης δείκτη */
#include <iostream>
using namespace std;

int main()
{
    int a=20;
    int *x=NULL;

    x=&a; // αποθηκεύω τη διεύθυνση μνήμης της a στο x

    cout << "Τιμή του x: "<<x<< endl;
    cout << "Τιμή του δείκτη *x: "<<*x<< endl;
    
    return 0;
}
