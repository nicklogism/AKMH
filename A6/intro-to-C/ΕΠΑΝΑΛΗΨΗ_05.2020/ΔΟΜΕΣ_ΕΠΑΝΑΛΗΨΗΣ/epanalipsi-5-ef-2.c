/*ΔΟΜΕΣ ΕΠΑΝΑΛΗΨΗΣ*/
/*
Εμφωλιασμένοι βρόχοι (nested loops)

Μελετήστε το παρακάτω πρόγραμμα στο χαρτί! Δείτε πως τρέχουν οι εμφωλιασμένοι
βρόχοι της for.

*/
#include <stdio.h>

int main()
{
  int i,j;

  for(i=1; i<=4; i++)
  {
    for(j=1; j<=4; j++)
    {
      printf("\n%d+%d=%d",i,j,i+j);
    }
    printf("\n");
  }


  return 0;
}
