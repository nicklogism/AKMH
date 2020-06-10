#include <iostream>
#include <string>
#include <cstdio>

using namespace std;

int main()
{
    int a[5][5];
    int i,j;
    
    for (i=0; i<5; i++)
    {
        for (j=0; j<5; j++)
        cin >> a[i][j];
    }
    
    return 0;
}

/* 
ΑΣΚΗΣΗ 2

Να βρεθούν τα αποτελέσματα 
Το άθροισμα των στοιχείων
της κύρια διαγωνίου 
και της δευτερεύουσας

1 1 1 1 1 
2 2 2 2 2 
3 3 3 3 3 
4 4 4 4 4 
5 5 5 5 5 
*/
