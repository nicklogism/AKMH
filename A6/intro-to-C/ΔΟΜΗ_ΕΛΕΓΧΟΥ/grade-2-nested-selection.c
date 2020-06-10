# include <stdio.h>

int main() {
  float grade;
  printf("Dwse vathmo proodou:\n");
  scanf("%f",&grade);

	if (grade<1 || grade>10) // Λογικός Τελεστής OR
  printf("Sfalma timis....\n");
  else {
    // Nested Selection στη else
    if (grade>=5)
    printf("Passed\n");
    else
    printf("Failed\n");
	      }
  }
