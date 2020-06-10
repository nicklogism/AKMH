#include <iostream>
using namespace std;

int main()
{
	int i,j;
	int arr[10][10];
	
	for (int i=0; i<10; i++)
	{
		for (int j=0; j<10; j++)
		{
			arr[i][j]=(i+1)*(j+1);
			cout << "\t" << arr[i][j];
		}
		cout << endl;
	}
	
	
	return 0;
	
}