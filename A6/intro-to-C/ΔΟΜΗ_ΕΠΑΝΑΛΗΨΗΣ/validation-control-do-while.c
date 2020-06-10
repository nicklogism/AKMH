#include <stdio.h>
main()
{
	float grade;
	//validation control start
	do {
		printf("DWSTE VATHMO POODOY apo 1 ews 10:\n");
		scanf("%f", &grade);
		if (grade<1 || grade>10)
		printf("Lathos timi....");
	}while (grade<1 || grade>10);
	//validation control end
	
	if (grade>=8.5)
	printf("Excellent!!!\n");
	else if (grade>=5)
	printf ("Passed!\n");
	else
	printf("Failed\n");
	
}
