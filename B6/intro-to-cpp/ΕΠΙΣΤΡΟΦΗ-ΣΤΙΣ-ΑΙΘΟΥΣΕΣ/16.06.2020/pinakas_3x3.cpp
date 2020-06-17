#include<iostream>
#define N 3
using namespace std;

int sum(int A[N][N]);

int main()
{
	int i,j;
	int a[N][N];
	
	for(i=0;i<N;i++)
		for(j=0;j<N;j++)
			cin>>a[i][j];
	
	cout<<sum(a)<<endl;
}

int sum(int A[N][N])
{
	int i,j,s=0;
	for(i=0;i<N;i++)
		for(j=0;j<N;j++)
			s+=A[i][j];
 
 return s;
}