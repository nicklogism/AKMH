#include <iostream>
#include <iomanip>
using namespace std; // Όλες οι βασικές βιβλιοθήκες της C++

main()
{
    int a=2;
	cout << "Hello World C++\n";
	cout<<"This is the " <<a<<"nd line"<<endl; // παράδειγμα με μεταβλητή a

	cout << "C++ is easy!"<<endl<<"C++ is easy !!"<<endl; // endl (end of line)

	cout<<"Keep"<<setw(5)<<"Calm"<<setw(4)<<"and"<<setw(10)<<endl;
    cout<<"Learn"<<setw(5)<<"C++";

}
