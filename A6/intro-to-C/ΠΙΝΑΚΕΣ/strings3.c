/* stirng copy */
#include <stdio.h>
#include <string.h> // Για συναρτήσεις του string header

main()
{
    char a[11],b[11];
    int l,l1,l2;

    printf("Give a string: \n");
    scanf ("%s",a);

    printf("Give a string: \n");
    scanf ("%s",b);

    l=strcmp(a,b);
    printf("%d\n",l);

    if (l>0)
        printf("Το %s είναι μεγαλύτερο του %s\n",a,b);
    else if (l<0)
        printf("Το %s είναι μικρότερο του %s\n",a,b);
    else
        printf("Το %s είναι ίσο με το %s\n",a,b);

    strcpy(a,b);
    printf("Copy Result: %s\n",a);

}
