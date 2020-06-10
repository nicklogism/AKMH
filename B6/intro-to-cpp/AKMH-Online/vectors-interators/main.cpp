#include <iostream>
#include <cstdlib>
#include <vector>

using namespace std;

int main()
{
    vector<int> a={100,1,2,3,4,5};
    
    vector<int>::iterator i=a.begin();
//iterator

    advance(i,3); // προχωράει ο iterator 3 θέσεις μπροστά.
    cout << *i <<endl; //διαχείριση αναγκαστικά ως pointer.
    
    return 0;
}
