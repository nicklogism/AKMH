#include <stdio.h>
int main() {
	float grade;
	if (grade >=8.5 && grade<=10)
	printf("EXCELLENT\n");
	
	else if (grade>=5.0)
	printf("PASSED\n");
	
	else if (grade >=1 && grade <5.0)
	printf("FAILED\n");
	
	else 
	printf("Error...\n");
}
