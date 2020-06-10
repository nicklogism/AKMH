/* synarthseis.c: Πρώτο μάθημα για τις συναρτήσεις. */

#include <stdio.h>

main()
{
    int x,sqr,m;
    int square(); // Δηλώνουμε τις συναρτήσεις.
    int mul();

    printf("\nΔώσε ακέραια τιμή: \n");
    scanf("%d", &x);

    // Κλήση συνάρτησης.
    // Μπορούμε να αποθηκεύσουμε τη τιμή  και σε δηλωμένη ξεχωριστή μεταβλητή.
    // sqr = square(x);
    // m = mul(x);

    printf("\nΤο τετράγωνο του %d είναι %d\n", x,square(x));
    printf("\nΤο διπλάσιο  του %d είναι %d\n", x,mul(x));
}

int square(int x)
{
    return x*x;
}

int mul(int x)
{
    return 2*x;
}




