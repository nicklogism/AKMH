#include<iostream>
#include<string>
#define N 5

using namespace std;

void read(int v[],string names[]);
float average(int v[]);
string maxname(int v[],string names[]);

int main()
{
	int V[N];
	string Names[N];
	
	read(V,Names);
	cout << "AVG=" << average(V) << endl;
	cout << "MaxName=" << maxname(V,Names) << endl;
	
	return 0;
}
void read(int v[],string names[])
{
	for(int i=0;i<N;i++)
		cin >> v[i] >> names[i];
 
}

float average(int v[])
{
	int i,sum=0;
	
	for(i=0;i<N;i++)
		sum+=v[i];
	
	return float(sum)/N;
}

string maxname(int v[],string names[])
{
	int max=v[0],i;
	
	string mn=names[0];
	
	for(i=1;i<N;i++)
	{
		if(v[i]>max)
		{
			max=v[i];
			mn=names[i];
		}
	}
 return mn;
}
