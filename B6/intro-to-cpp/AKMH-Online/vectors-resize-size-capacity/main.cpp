#include <iostream>
#include <cstdlib>
#include <vector>

using namespace std;

int main()
{
    vector<int> a={100,1,2,3,4,5};
    
    vector<int>::iterator i=a.begin();
    //iterator
    vector<int>::iterator j=a.end();
    
    auto i1=next(i,3); // άλλος τρόπος ολίσθησης 3 θέσεις προς τα δεξιά
    
auto j1=prev(j,3); 
/* Ολίσθηση 3 θέσεων προς τα πίσω (προς τα αριστερά). Προσοχή! μετράει από το 5
γιατί υπάρχει και άλλο στοιχείο, το μηδενικό, δεξιά του 5.*/
    
    cout << *i1 <<endl; 
    cout << *j1 <<endl;
    
    
    for (auto x = a.begin(); x <= a.end(); x++)
        cout << *x << " " ; 
// Επαλήθευση τελευταίου στοιχείου (δεξιά) με το x<=a.end()
    
    cout << endl ;
    
    cout << a.size() <<endl ;
/* Δείχνει πόσα στοιχεία έχει το vector. Προσοχή στον trailing character όπως
στους πίνακες χαρακτήρων. Υπάρχει μεν, αλλά δεν προσμετράται. */
 
    
    cout << a.capacity() <<endl ; 
// Χωρητικότητα του vector. Διαφορετικό από το size.
    
    a.resize(10);
    cout << a.size() <<endl ;
    cout << a.capacity() <<endl ;
    
    for (auto x = a.begin(); x <= a.end(); x++)
        cout << *x << " " ;
    
    
    return 0;
}
