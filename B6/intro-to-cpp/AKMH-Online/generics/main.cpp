#include <iostream>
using namespace std;

template <class T> T tmax(T x, T y)
{
    return (x>y) ? x:y; 
}
int main (int argc, char** argv)
{
    int i,k,max;
    i=3;
    k=5;
    max=tmax<int>(i,k);
// max=tmax<char>('i','k'); // παίζει και με χαρακτήρες
    cout << max <<endl;
    
    return 0;
}
