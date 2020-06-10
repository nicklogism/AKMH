#include <iostream>
#include <iomanip>
using namespace std;

main()
{
	char kat;
	float price;
	
		cout<<"Dwste mia apo tis 4 kathgories (A,B,C,D): "<<endl;
		cin>>kat;
	
	switch(cat)
	{
		case 'A': 
				{
					price=200;
					cout<<"Timi: "<<price<<endl;
					break;
				}  
        case 'B':
				{
					price=150;
					cout<<"Timi: "<<price<<endl;
					break;
				}  

        case 'C':
				{
					price=100;
					cout<<"Timi: "<<price<<endl;
					break;
				}
		
		case 'D':
				{
					price=150;
					cout<<"Timi: "<<price<<endl;
					break;
				} 

        default: cout<<"Lathos timi"<<endl;
	}
	
}