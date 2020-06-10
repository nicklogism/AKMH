/*ASKHSH1-2-261119.c
Grapste programma to opoio:
a) 8a diavazei pragmatikous 8etikous ari8mous
b) tha termatizei molis to athroisma twn arithmwn 3eperasei th timh 100
c) Telos to programma ua typwnei to meso oro twn timwn pou diavase

Ylopoihsh me do-while*/

#include <stdio.h>

main()
{

float aver,num,sum=0; 
int count=0;
printf("To programma termatizei me orio athroismatos:1000\n");
	do{
		do{
			printf("dwse pragmatiko ari8mo\n");
			scanf("%f", &num);
				if (num<0)
				printf("Mi apodekti timh\n");
			}while (num<=0);
		sum+=num;
		count++;
		}while (sum<=1000);
	aver=sum/count;
	printf("Mesos oros:%0.3f\n", aver);

}
