#include <iostream>
#include <string>

using namespace std;

int main()
{
	string onoma;
	
	cout << "Dwse onoma: ";
	
	getline(cin,onoma);
	
	cout << "Plithos xarakthrwn: " << onoma.size() << endl;
	
	onoma.clear();
	if (onoma.empty()==1)
		cout << "Keno onoma" << endl;
	else
		cout << "To onoma einai" << onoma << endl;
	
	
	//getline(cin,onoma); 
	
	
	return 0;
}