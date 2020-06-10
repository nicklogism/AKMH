#include <iostream>
using namespace std;

int main()
{
	int numbers[5][5] = { {1,2,3,4,5},{6,7,8,9,10},{11,12,13,14,15},{16,17,18,19,20},{21,22,23,24,25} };
 
	int rows[5] = {0,0,0,0,0};
	int cols[5] = {0,0,0,0,0};
	int sum = 0;
 
	for (int i=0; i<5; i++)
		{
			for (int j=0; j<5; j++)
			{
				rows[i] +=numbers[i][j];
				cols[j] +=numbers[i][j];
				sum +=numbers[i][j];
			}
	
		}
	
	for (int i=0; i<5; i++)
	{
		for (int j=0; j<5; j++)
		{
			cout << numbers[i][j]<<"\t";
		}
		cout <<"\t" << rows[i];
	}
	for (int j=0;j<5;j++)
	{
		cout <<"\t" << cols[j]<<"\t";
		cout << sum << endl;
	}
	
	return 0;
}