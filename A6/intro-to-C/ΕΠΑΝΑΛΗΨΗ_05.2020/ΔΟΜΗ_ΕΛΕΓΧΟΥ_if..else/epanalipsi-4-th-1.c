/* Τελεστές και Δομή Ελέγχου */
/*

Το = δεν είναι ισότητα. Είναι τελεστής εκχώρησης.
όνομα_μεταβλητής = παράσταση;
ΠΡΩΤΑ γίνεται ο υπολογισμός της παράστασης και μετά η εκχώρηση, πχ στη μεταβλητή x.
x = 1+4;
Μαθηματικοί τελεστές: + - * / %(modulo)

*/

#include <stdio.h>

int main()
{
  int x,y,z;
  int telestis;

  printf("Dwse 1o akeraio: ");
  scanf("%d",&x);
  printf("Dwse 2o akeraio: ");
  scanf("%d",&y);
  // Προσοχή στην εκτύπωση του %.
  printf("Dwse ton telesth\n 0 gia +\n 1 gia -\n 2 gia *\n 3 gia /\n 4 gia %%\n");
  scanf("%d",&telestis);

  if(telestis==0)
  {
    z=x+y;
    printf("%d+%d=%d",x,y,z);
  }
  if(telestis==1)
  {
    z=x-y;
    printf("%d-%d=%d",x,y,z);
  }
  if(telestis==2)
  {
    z=x*y;
    printf("%d*%d=%d",x,y,z);
  }
  if(telestis==3)
  {
    z=x/y;
    printf("%d/%d=%d",x,y,z);
  }
  if(telestis==4)
  {
    z=x%y;
    printf("%d%%%d=%d",x,y,z); // πρόβλημα με την εκτύπωση του %.
  }
  return 0;
}
