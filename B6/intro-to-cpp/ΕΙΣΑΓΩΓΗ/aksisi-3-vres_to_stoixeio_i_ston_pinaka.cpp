#include <iostream>
using namespace std;

#define N 5

int main()
{
  int i;
  int A[N]= {5, 3, 2, 4, 8 }; // Πίνακας δεδομένων
  int x=7; // στοιχείο προς εύρεση
  bool found; // λογική μεταβλητή εύρεσης

  found=false; // αρχικοποίηση
  for(i=0; i<N; i++)
  {
    if (A[i]==x)
    {
      found=true;
      break;
    }
  }

  if(found)
  cout<<"Βρέθηκε το στοιχείο "<<x<<" στη θέση "<<i;
  else
  cout<<"Το στοιχείο δεν βρέθηκε";

  return 0;
}
