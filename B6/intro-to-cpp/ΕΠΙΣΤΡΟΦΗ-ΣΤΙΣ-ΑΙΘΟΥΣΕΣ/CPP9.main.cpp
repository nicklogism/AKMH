#include <iostream>
using namespace std;

int main()
{
	int n=0;
	int ca=12,cb=12,cc=12;
	do
	{
		ca+=3;
		cb+=5;
		cc+=7;
		if (ca>12) ca-=12;
		if (cb>12) cb-=12;
		if (cc>12) cc-=12;
		cout<<"Roloi A:"<<ca<<endl;
		cout<<"Roloi B:"<<cb<<endl;
		cout<<"Roloi C:"<<cc<<endl;
		n++;
	}while (ca!=12 || cb!=12 || cc!=12);
	cout<<"Plithos patimatwn koumpiou:"<<n;

	return 0;
}
