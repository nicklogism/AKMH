#include<iostream>
#include<string>
#define N 3

using namespace std;

void read(string names[] , double v[]);
double average(double v[]);
string maxgrade(double v[],string names[]);

int main()
{
	double V[N];
	string Names[N];
	
	read(Names,V);
	cout << "Mesos oros vathmologiwn=" << average(V) << endl;
	cout << "Spoudasths me th megisth vathmologia=" << maxgrade(V,Names) << endl;
	
	return 0;
}
void read(string names[], double v[])
{
	for(int i=0;i<N;i++)
	{
		cout <<	"Eisgete onoma kai vathmo spoudasti" << endl;
		cin >> names[i];
		cin	>> v[i];
	}
}

double average(double v[])
{
	int i;
	double sum=0;
	
	for(i=0;i<N;i++)
		sum+=v[i];
	
	return double(sum)/N;
}

string maxgrade(double v[],string names[])
{
	int max=v[0];
	int i;
	
	string mn=names[0];
	
	for(i=1;i<N;i++)
	{
		if(v[i]>max)
		{
			mn=names[i];
			max=v[i];
			
		}
	}
 return mn;
}
