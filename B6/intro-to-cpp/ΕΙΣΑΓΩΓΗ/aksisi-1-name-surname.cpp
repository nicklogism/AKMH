#include <iostream>
using namespace std;

int main()
{
  char name[80];
  char surname[80];
  int age;

  cout << "Give name: ";
  cin >> name;
  cout << "Give surname: ";
  cin >> surname;
  cout << "Give age: ";
  cin >> age;

  cout<<surname<<" "<<name<<"("<<age<<")";


  return 0;
}
