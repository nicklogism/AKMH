#include <iostream>
using namespace std;

int func(int x,int y); // μπορεί να γραφεί και ως int func(int,int)
double func(double x,double y);

int main()
{
  cout << func(5,4) << endl;
  cout << func(5.1,2.2) << endl;

  return 0;
}

int func(int x,int y)
{
  return x+y;
}

double func(double x, double y)
{
  return x+y;
}
