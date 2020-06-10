#include <stdio.h>
main()
{
	float grade;
	printf("DWSTE VATHMO POODOY:\n");
	scanf("%f", &grade);
	
	//validation control start
	while (grade<1 || grade>10)
	{
	printf("La8os timi\ndwse vathmo proodou apo 1 ews 10:\n");
	scanf("%f", &grade);
	}
	//validation control end
	
	if (grade>=8.5)
	printf("Excellent!!!\n");
	else if (grade>=5)
	printf ("Passed!\n");
	else
	printf("Failed\n");
	
}
