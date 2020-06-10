#include <stdio.h>
main()
{
	int i=1;
	char ch;
	while (i<=2)
	{
		printf("Dwse xaraktira:\n");
		scanf(" %c", &ch); /*Tο κενό στο %c είναι επίτηδες για να μη πάρει το Enter ως χαρατήρα*/
		if (ch!='A')
		continue; /*Αν ενεργοποιηθεί η continue, ότι υπάρχει κάτω από αυτή ΔΕΝ θα εκτελεστεί,
                    και πάει πάλι στη loop.*/
				i++;
	}
	printf("Swsta! Edwses 2 fores to A!");

}
