/* Να γίνει αντιμετάθεση των τιμών των μεταβλητών */

#include <iostream>
#include <string>

using namespace std;

void allagi(int x, int y)
{
    int temp;
    temp=x;
    x=y;
    y=temp;
}

int main()
{
    int a,b;
    a=20;
    b=30;
    cout << "Η αρχική τιμή της a :" <<a<<endl;
    cout << "Η αρχική τιμή της b :" <<b<<endl;
    
    allagi(a,b); //call by value (δεν λειτουργεί η αντιμετάθεση)
    
    cout << "Η τελική τιμή της a :" <<a<<endl;
    cout << "Η τελική τιμή της b :" <<b<<endl;
    
    return 0;
}