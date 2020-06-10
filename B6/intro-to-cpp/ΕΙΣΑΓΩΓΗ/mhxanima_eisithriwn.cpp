#include <iostream>
#include <iomanip>

#define TICKET 1
using namespace std;

main()
{
    int n,resta,poso,d5,d2,d1;
	float cost;
	cout<<"Posa eisitiria thelete?"<<endl;
	cin>>n;
	cost=n*TICKET*100;
	cout<<"Eisagete xrimata: "<<endl;
	cin>>poso;
	resta=poso*100-cost;
	d5=resta/500;
	d2=resta%500/200;
	d1=resta%500%200/100;
	
	cout<<"Resta"<<endl<<endl;
	cout<<"5Euro: "<<d5<<endl;
	cout<<"2Euro: "<<d2<<endl;
	cout<<"1Euro: "<<d1<<endl;
}
