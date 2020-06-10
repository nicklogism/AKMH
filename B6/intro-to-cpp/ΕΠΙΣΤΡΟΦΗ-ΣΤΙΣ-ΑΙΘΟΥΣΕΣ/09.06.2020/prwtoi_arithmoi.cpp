#include <iostream>
using namespace std;

bool prime(int x);

int main()
{
	int x;
	
	cout << "Dwse enan akeraio arithmo: "; 
	cin >> x;
	
	if(prime (x))
		cout << "Prime";
	else
		cout << "Not Prime";
		
	return 0;

}

bool prime(int x)
{	
	
	int count = 0;
	for (int i=1 ; i<=x ; i++)
	{
		if (x%i==0)
			count++;
	}
	if (count<=2)
		return true;
	else
		return false;
}


