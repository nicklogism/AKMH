#include <iostream>
#include <string>
#include <cstdio>
using namespace std;

int main()
{
    // Θέσεις  0 1 2  3  4
//  int a[5]={-1,3,5,-35,6};

//  Γέμισμα πίνακα με for   
    int i, a[5];
    for (i=0;i<5;i++)
    {
        cout << "Δώσε στοιχείο" << endl;
        cin >> a[i];
    }
//  int i;
//  a[1]=33;
    
    // Εμφάνιση στοιχείων πίνακα με αύξουσα σειρά
    for (i=0;i<5;i++)
    cout << a[i] << " " << endl;
    
    // Εμφάνιση στοιχείων πίνακα με φθίνουσα σειρά
    for (i=4;i>=0;i--) // προσοχή οι θέσεις είναι 5, οπότε ξεκινάμε από το στοιχείο 4
    cout << a[i] << " " << endl;
    
    return 0;
}

