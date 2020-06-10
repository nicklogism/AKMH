#include <stdio.h>

int min_array(int a[8])
{
	int i,min=a[0];
	for(i=1;i<8;i++)
		if(a[i]<min)
			min=a[i];
		return min;
}

main()
{
	int a[8]={89,23,123,24,11,78,678,45};
	int m=min_array(a);
		
	printf("Minimum: %d\n",m);
}
