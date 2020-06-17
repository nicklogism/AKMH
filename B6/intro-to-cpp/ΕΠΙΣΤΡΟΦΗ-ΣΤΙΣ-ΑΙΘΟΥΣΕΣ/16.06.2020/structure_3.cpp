/**/

#include<iostream>
#include <string>
#define N 2

using namespace std;

struct student {
	int am;
	string name;
	int tel;
	bool active;
};

void readStudent(student &st);
void printStudent(student st);

int main()
{
	int i;
	student std[N];
	for (i=0;i<N;i++)
		readStudent(std[i]);
	
	for (i=0;i<N;i++)
		printStudent(std[i]);
}

void readStudent(student &st) {
	cout << "Dwse ton AM tou spoudasti: ";
	cin >> st.am;
	
	cout << "Eisagete onomatepwnymo spoudasti: ";
	cin >> st.name;

	cout << "Dwse ton arithmo thlefwnou tou spoudasti: ";
	cin >> st.tel;
	
	cout << "An einai energos eisagete 1 diaforetika 0: ";
	cin >> st.active;
}

void printStudent(student st)
{
	cout << "onomatepwnymo spoudasti: " << st.name << endl;
	cout << "A.M.: " << st.am << endl;
	cout << "Tilefwno: " << st.tel << endl;
	if (st.active)
		cout << "Energos" << endl;
	else
		cout << "Anenergos" << endl;
}