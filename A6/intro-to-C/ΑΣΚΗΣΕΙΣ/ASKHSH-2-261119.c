/*ASKHSH-2-261119.c
Na grapsete programma to opoio
a) 8a diavazei 8etikous akeraious ari8mous (mono akeraioi ginontai apokektoi)
b) 8a termatizei molis do8ei o ari8mos 0
c) 8a tupwnei to plh8os twn artiwn kai to plh8os twn perittwn pou diavase
*/

#include <stdio.h>

main()

{
 	int num, countodd, counteven;
 	countodd=0;
 	counteven=0;
 	
 	do{
 		printf("Dwse akeraio kai 8etiko ari8mo\n");
 		scanf("%d" ,&num);
		
		if (num<0)
			{
				printf("Mi apodekti timi\n");
 				printf("Dwse akeraio kai 8etiko ari8mo\n");
 				scanf("%d" ,&num);
				}
		if (num%2==0){
					counteven++;	
					}
		else
		countodd++;
		
	}while (num<=0);
	 printf("To plh8os twn artiwn einai:%d\n" , counteven);
	 printf("To plhuos twn peritwn einai:%d\n" , countodd);	 
}
