#include <iostream>
using namespace std;

int main()
{
	int i;
	int year[]={2010,2011,2012,2013,2014};
	double profit[]={97.77,98.34,103.56,102.68,104.54};
	cout<<"Year"<<"\t"<<"Profit"<<endl;
	for (i=0;i<5;i++)
	cout<<year[i]<<"\t"<<profit[i]<<endl;

	return 0;
}
