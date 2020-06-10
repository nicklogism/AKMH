#include <iostream>
#include <iomanip>
using namespace std;

main()
{
	int nb;
	float cost;
	
	cout<<"Dwse arithmo vivliwn: "<<endl;
	cin>>nb;
	
	if (nb<=100)
		cost=nb*8.0;
	else if (nb<=500)
		cost=100*8.0+(nb-100)*6.40;
	else
		cost=100*8.0+400*6.40+(nb-500)*3.5;
	
	cout<<"Kostos agoras vivliwn: "<<fixed<<setprecision(2)<<cost<<endl;
}