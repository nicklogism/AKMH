#include <iostream>
using namespace std;

void triangle (int x, char c);

int main()
{
	int x;
	char c;
	
	cout << "Dwse enan arithmo kai enan xarakthra: "; 
	cin >> x >> c;
	
	triangle(x,c);
	
	return 0;

}

void triangle (int x, char c)
{	
	int i, j;
	for (i=1; i<=x; i++)
	{
		for (j=1; j<=i; j++)
		cout << c;
		cout << endl;
	}
	
}