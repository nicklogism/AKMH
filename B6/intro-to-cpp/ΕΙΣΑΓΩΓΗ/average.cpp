#include <iostream>
#include <iomanip>
using namespace std;

main()
{
    float a,b,c;
	float avg;
	cout<<"Give three (3) integers: "<<endl;
	cin>>a>>b>>c;
	avg=(a+b+c)/3;
	cout<<avg<<endl;
	cout<<setprecision(4)<<avg<<endl; // setprecision
}
