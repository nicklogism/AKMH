#include <iostream>
#include <cstdlib>
using namespace std;


int megalyteros(int x, int y)
{
    if (x>y)
        return x;
    if (x<y)
        return y;
    
    // Διαφορετικός τρόπος προσέγγισης με τριαδικό τελεστή.
    // return (x>y) ? x : y; 
return 0;
}

int main (int argc, char** argv)
{
    int i,k,max;
    i=3;
    k=5;
    max=megalyteros(i,k);
    cout << max <<endl;
    
    return 0;
}
