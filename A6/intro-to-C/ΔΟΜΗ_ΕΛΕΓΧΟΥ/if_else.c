# include <stdio.h>

main()
{
	int x;
	printf("Dwse akeraio arithmo:\n");
	scanf("%d",&x);

	if (x<10)
		printf("Monopsifios\n");
	else if (x<100) // Δεύτερος έλεγχος αν ο πρώτος είναι False
		printf("Dipsifios\n");
	else // Αν και οι δυο παραπάνω είναι False τότε,
		printf("Tripsifios, Tetrapsifios k.l.p\n");
	
	}

/*
Λογικοί Τελεστές

OR στη C     ||
AND στη C    &&
NOT στη C    !
*/
