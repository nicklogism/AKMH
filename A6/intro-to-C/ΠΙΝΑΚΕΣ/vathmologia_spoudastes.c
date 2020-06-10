#include <stdio.h>

/*Να εφανίζει τα ονόματα των σπουδαστών βάσει βαθμολογίας,
ταξινομημένους με φθίνουσα σειρά*/

main()
{
    char names[4][30];
    float grades[4];
    float temp;
	char temp2;
    int i,j,k;

    // Create Arrays
    for(i=0; i<4; i++)
    {
        printf("Give student surname: \n");
        scanf("%s", names[i]);
        printf("Give student grade: \n");
        scanf("%f", &grades[i]);
    }
    //print arrays before bubbleshort
    for (i=0; i<4; i++)
    {
        printf("Student surname:%s\tStudent grade: %0.2f\n", names[i], grades[i]);
    }
    // Bubble Short
    printf("\n");
    for (i=1; i<4; i++)
        for(j=3;j>=1;j--)
    {
        if (grades[j]>grades[j-1]) // desencding sorting
        {
            temp=grades[j];
            grades[j]=grades[j-1];
            grades[j-1]=temp;
			for (k=0; k<20; k++)
			{
				temp2=names[j][k];
				names[j][k]=names[j-1][k];
				names[j-1][k]=temp2;
			}
        }
    }
    for (i=0; i<4; i++)
    {
        printf("Student surname:%s\tStudent grade: %0.2f\n", names[i], grades[i]);
    }
}
