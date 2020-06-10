#include <iostream>
using namespace std;

double average(int a,int b);
double average(double a,double b);

int main()
{	
	int int_a,int_b;
	double double_a,double_b;
	int in;
	
	cout<<"Eisagete: 1-akeraioi , 2-pragmatikoi"<<endl;
	cin>>in;
	
	if (in==1)
	{
		cout<<"Eisagete duo akeraious: "<<endl;
		cin>>int_a>>int_b;
		cout<<"O mesos oros einai: "<<average(int_a,int_b)<<endl;
	}
	else if (in==2)
	{
		cout<<"Eisagete duo pragmatikous: "<<endl;
		cin>>double_a>>double_b;
		cout<<"O mesos oros einai:"<<average(double_a,double_b)<<endl;
	}
	else
	{
		cout<<"Lathos epilogh. Eksodos!";
	}	
	return 0;
}


	
double average(int a,int b)
{
	return (a+b)/2.0;
}

double average(double a,double b)
{
	return (a+b)/2;
}