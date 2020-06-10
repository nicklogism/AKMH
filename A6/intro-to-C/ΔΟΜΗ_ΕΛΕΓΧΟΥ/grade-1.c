# include <stdio.h>

int main() {
  float grade;
  printf("Dwse vathmo proodou:\n");
  scanf("%f",&grade);

	if (grade>=8.5)
  printf("Passed\nExcellent\n");
  else if (grade>=5)
  printf("Passed\n");
  else
  printf("Failed\n");
	}
