#include<iostream>
#define N 5

using namespace std;

void fill(int a[]);
void print(int a[]);


int main()
{
	int A[N];
	fill(A);
	print(A);
	
	return 0;
}

void fill(int a[])
{
	int i;
	for(i=0; i<N; i++)
		cin >> a[i];
}
void print(int a[])
{
	int i;
	for(i=0;i<N;i++)
		cout << "\t" << a[i];
	cout << endl << endl;
}
