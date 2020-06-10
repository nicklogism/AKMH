/*ASKHSH1-1*/
/*Grapste programma to opoio:
a) 8a diavazei pragmatikous 8etikous ari8mous
b) tha termatizei molis to athroisma twn arithmwn 3eperasei th timh 100
c) Telos to programma ua typwnei to meso oro twn timwn pou diavase*/

#include <stdio.h>

main()
{

float aver,num,sum=0; 
int count=0;

	
	while (sum<=1000)
	{
		printf("dwse pragmatiko ari8mo\n");
		scanf("%f", &num);
		while (num<=0) // validation control
		{
		printf("Lathos timi\ndwse pragmatiko ari8mo!\n");
		scanf("%f", &num);
		}
		sum+=num;
		count++;
	}
	aver=sum/count;
	printf("Mesos oros:%0.3f\n", aver);

}
