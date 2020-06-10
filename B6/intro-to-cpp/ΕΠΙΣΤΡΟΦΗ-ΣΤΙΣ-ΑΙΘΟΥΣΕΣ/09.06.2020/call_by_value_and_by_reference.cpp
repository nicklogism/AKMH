#include<iostream>
using namespace std;

void byvalue(int y);
void byreference(int& y);



int main() {
	int y;
	cout << "Dwse akeraio aritmo: ";
	cin >> y;
	
	cout << "Call by value" << endl;
	byvalue(y);
	cout << "y="<< y <<endl;
	
	cout << "Call by reference" << endl;
	byreference(y);
	cout << "y=" << y <<endl;
	
	return 0;
 }
 
 void byvalue(int y){
 y = y + 1;
}

void byreference(int& y){
 y = y + 1;
}