/* String Lenght */
#include <stdio.h>
#include <string.h> // Για συναρτήσεις του string headear

main()
{
    char a[11],b[11];
    int l1,l2;

    printf("Give a string: \n");
    scanf ("%s",a);

    printf("Give a string: \n");
    scanf ("%s",b);

    l1=strlen(a);
    l2=strlen(b);

    printf("Το πλήθος των χαρακτήρων του %s είναι %d:\n ",a,l1);
    printf("Το πλήθος των χαρακτήρων του %s είναι %d:\n ",b,l2);

    if(l1>l2)
    printf("Το %s είναι μεγαλύτερο του %s\n",a,b);
    else if (l1<l2)
    printf("Το %s είναι μικρότερο του %s\n",a,b);
    else
    printf("Το %s είναι ίσο με το %s",a,b);
}
