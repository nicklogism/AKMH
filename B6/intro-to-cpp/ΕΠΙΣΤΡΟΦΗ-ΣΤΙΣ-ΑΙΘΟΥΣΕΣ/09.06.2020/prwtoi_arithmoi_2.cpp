#include <iostream>
using namespace std;

bool prime(int x);

int main()
{
	int x,y,i;
	
	cout << "Dwse ena euros arithmwn: "; 
	cin >> x >> y;
	
	for (i=x; i<=y; i++)
	{
		if (prime (i))
		cout << "Prwtos: " << i <<"\t";
	}
	
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