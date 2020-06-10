#include <iostream>
using namespace std;

int main()
{
	int i,v,e,p;
	cout<<"Eisagete ti vasi kai ton ektheti tis dunamis:"<<endl;
	cin>>v>>e;
	p=1;

	for(i=0;i<e;i++)
	{
		p*=v;
	}
	cout<<"Apotelesma:"<<p;

	return 0;
}
