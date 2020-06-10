#include <iostream>
using namespace std;

int main()
{
	int a[3][4] = { {5,7,9,11},{-2,0,4,8},{12,9,-3,5}};
	int b[4][3];
	int i,j;
	
	for (i=0; i<4; i++)
	{
		for (j=0; j<3;j++)
			b[i][j]=a[j][i];
	}
	
	for (i=0; i<3; i++)
	{
		for (j=0; j<4; j++)
			cout << a[i][j]<<"\t";
		cout << endl;
	}
	cout << endl;
	
	for (i=0; i<4; i++)
	{
		for (j=0; j<3; j++)
			cout << b[i][j]<<"\t";
		cout<<endl;
	}
	cout << endl;
	
	return 0;
}