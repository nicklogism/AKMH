#include <iostream>
using namespace std;

int main()
{
	int i=21,count=0;
	do
	{
		cout<<i<<"\t";
		i+=7;
		count++;
	}while(i<=777);

	cout<<"\n\n"<<count;

	return 0;
}
