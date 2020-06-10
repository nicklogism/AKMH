#include<iostream>
#include<cmath>

using namespace std;

double emvado(double a, double b);
double perimetros(double a, double b);

int main()
{
	double a,b;
	cout << "Dwse tiw plevres tou trigvnou a kai b: ";
	cin >> a ; 
	cout << endl;
	cin >> b;
 
	emvado(a,b);
	perimetros(a,b);
 
	cout<<"Emvadon="<<emvado(a,b)<<endl;
	cout<<"Perimetros="<<perimetros(a,b)<<endl;
 
	return 0;
}

double emvado(double a, double b)
{
	double e;
	return a*b/2;
}

double perimetros(double a, double b)
{
	double c;
	
	c=sqrt(a*a+b*b);
	return a+b+c;
}