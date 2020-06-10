#include <stdio.h>
main()
{
	//break
	int i=1;
	char ch;
	while (i<=5)
	{
		printf("Δώσε Χαρακτήρα: \n");
		scanf(" %c", &ch);
		if (ch=='A')
		break;
		i++;
	}
	if (i<6)
	printf("Mpravo! Edwses to swsto xarakthra\n");
	else
	printf("Apetyxes!\n");

}
