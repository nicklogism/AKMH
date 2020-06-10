/* Να γίνει αντιμετάθεση των τιμών των μεταβλητών */

#include <iostream>
#include <string>
using namespace std;

void allagi(int *x, int *y);

int main()
{
    int a,b;
    a=20;
    b=30;
    cout << "Η αρχική τιμή της a :" <<a<<endl;
    cout << "Η αρχική τιμή της b :" <<b<<endl;
    
    allagi(&a,&b); //call by pointer (λειτουργεί η αντιμετάθεση)
    
    cout << "Η τελική τιμή της a :" <<a<<endl;
    cout << "Η τελική τιμή της b :" <<b<<endl;
    
    return 0;
}

void allagi(int *x, int *y) // στοχεύουμε στις θέσεις μνήμης με pointers
{
    int temp;
    temp=*x;
    *x=*y;
    *y=temp;
}
