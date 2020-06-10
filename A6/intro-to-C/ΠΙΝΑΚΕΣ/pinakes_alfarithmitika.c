/* Αποθήκευση Strings μέσα σε πίνακες */

#include <stdio.h>
#define SIZE 100

main()
{
    char name[SIZE];
    printf("Give a string up to 10 chars: \n");
    scanf ("%s",name);
    printf("You entered: %s\n",name);
    //printf("%c",name[4]);

    char student[5][31];
    int i;
    for (i=0; i<5; i++)
        {
            printf("Give student name:\n");
            scanf("%s",student[i]);
        }
    for (i=0; i<5; i++)
    {
        printf("You entered: %s\n",student[i]);
    }

}
