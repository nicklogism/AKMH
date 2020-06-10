#include <iostream>
#include <cstdlib>
using namespace std;

class laptop
{
    public: // access specifier
    int production_year; // attribute
    string model; // attribute 
    string brand; 
    string lcd;
    string ram; 
    
    void warrant()  // method
    {
        cout << "exeis egguhsh"<<endl;
    } 
};

int main()
{
    
    laptop example; 
    example.brand="lenovo" ;
    example.ram="16GB" ;
    cout << example.brand << endl;
    example.warrant();
    
    return 0;
}
