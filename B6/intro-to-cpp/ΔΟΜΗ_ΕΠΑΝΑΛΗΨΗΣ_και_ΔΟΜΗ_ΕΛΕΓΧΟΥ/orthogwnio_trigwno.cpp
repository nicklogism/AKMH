#include <iostream>
#include <cmath>
using namespace std;

main()
{
	int x,y,z;
	int sum;
	sum=0;
	
	cout<<"Dwse to megethos twn 3 gwniwn tou trigwnou: "<<endl;
	do{
		cin>>x>>y>>z;
		sum=x+y+z;
		if (sum!=180)
			cout<<"Oi gwnies den antistoixoun se trigwno!"<<endl;
	}while (sum!=180);	
	
	if (x==90 || y==90 || z==90)
		cout<<"Orthogwnio trigwno"<<endl;
	else
		cout<<"Oxi orthogwnio trigwno"<<endl;
}