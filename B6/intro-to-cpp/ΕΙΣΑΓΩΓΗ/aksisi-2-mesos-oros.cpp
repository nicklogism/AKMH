#include <iostream>
using namespace std;

double average(int a, int b);
double average(double a, double b);

int main()
{
  int int_a,int_b;
  double double_a,double_b;
  int in;

  cout<<"Δώσε 1-ακέραιοι, 2-πραγματικοί: ";
  cin>>in;

  if(in==1)
  {
    cout<<"Δώσε τον πρώτο ακέραιο: ";
    cin>>int_a;
    cout<<"Δώσε τον δεύτερο ακέραιο: ";
    cin>>int_b;
    cout<<"Μέσος όρος: "<<average(int_a, int_b);
  }
  else if(in==2)
  {
    cout<<"Δώσε τον πρώτο πραγματικό: ";
    cin>>double_a;
    cout<<"Δώσε τον δεύτερο πραγματικό: ";
    cin>>double_b;
    cout<<"Μέσος όρος: "<<average(double_a, double_b);
  }
  else
  {
    cout<<"Λάθος τιμή! bye bye";
  }
  return 0;
}

double average(int a, int b)
{
  return (a+b)/2.0;
}

double average(double a, double b)
{
  return (a+b)/2;
}
