#include <iostream>
#include <string>

using namespace std;

int main()
{
	string onoma;
	int s,i;
	
	cout << "Dwse onoma: ";
	cin >> onoma;
	cout << onoma << endl;
	
	s=onoma.size();
	
	
	for(i=0; i<onoma.size(); i++)
	{
		if (onoma[i] == 'o')
		{
			onoma[i] = 'w';
		}
		
	}
		
	cout << onoma << endl;
	
	return 0;
}