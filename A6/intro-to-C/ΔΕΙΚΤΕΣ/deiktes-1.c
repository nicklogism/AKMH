/* 
Ο δείκτης είναι μια μεταβλητή που έχει ως τιμή του τη θέση μνήμης μιας άλλης μεταβλητής.
Ο δείκτης δηλώνεται αναλόγως τη μεταβλητή με την οποία έχει συνδεθεί. Π.χ. int, char, float κλπ. Δηλώνεται πάντα με αστερίσκο μπροστά. *p
Ο δείκτης είναι συνδεδεμένος με κάποια μεταβλητή. 
*/

#include <stdio.h>

main()
{
	int a;
	int *ptr; // Δημιουργεί μια μεταβλητή τύπου δείκτη σε ακέραιο (pointer to int)
	
	a = 99; 
	ptr = &a; // Αντιστοιχίζει την ptr με τη θέση μνήμης της a.
	
	printf("\n%d\n", *ptr); // τυπώνει τη τιμή της μεταβλητής
	printf("%p\n", ptr);  // τυπώνει τη τιμή της θέσης μνήμης της μεταβλητής που δείχνει ο pointer.
	
	(*ptr)++;  // Αύξηση τη τιμής της μεταβλητής κατά ένα.
	printf("\n%d\n", *ptr);
	printf("%p\n", ptr);
	
	ptr++;  // Αύξηση της τιμής της θέσης μνήμης κατά 4bytes(int). Αλλαγή του pointer. 
	printf("%p\n", ptr);
	
	
	return 0; 
}
