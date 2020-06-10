/* Γράψτε πρόγραμμα που θα διαβάζει τα Ονοματεπώνυμα 5 σπουδαστών μέχρι και 20 χαρατήρες και τη βαθμολογία τους
και θα τυπώνει μόνο εκείνων με τη μεγαλύτερη βαθμολογία. */

#include <stdio.h>
#include <string.h>

main()
{
    char names[5][21];
    float grades[5];
    int max,i;


    for(i=0; i<5; i++)
    {
        printf("Give student surname:\n");
        scanf("%s",names[i]);
        printf("Give student grade: \n");
        scanf("%f",&grades[i]);
        while (grades[i]<1 || grades[i]>10)
        {
            printf("Wrong number...give between 1-10: \n");
            scanf("%f",&grades[i]);
        }
    }

    max=grades[0];

    for (i=1;i<5;i++)
    {
        if (grades[i]>max)
        {
            max=grades[i];
        }
    }

    for (i=0; i<5; i++)
    {
        if (grades[i]==max)
            printf("Student with greatest grade is: %s\n",names[i]);
    }
}
