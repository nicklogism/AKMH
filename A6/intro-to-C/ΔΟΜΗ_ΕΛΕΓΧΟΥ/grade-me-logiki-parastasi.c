# include <stdio.h>

int main() {
  float grade;
  printf("Dwse vathmo proodou:\n");
  scanf("%f",&grade);

	if (grade>0 && grade<5) // Λογικός Τελεστής AND
  printf("Failed\n");
  else if (grade>=5 && grade<8.5)
  printf ("Passed\n");
  else if (grade>=8.5 && grade <=10)
  printf ("Passed\nExcellent!");
  else 
  printf("Sfalma Timhs\n");
}

