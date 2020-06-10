/* synarthseis2.c: Βρες το μέγιστο μεταξύ 4 αριθμών.
Hint: Μπορούμε να καλέσουμε τη συνάρτηση όσες φορές θέλουμε.*/

#include <stdio.h>

main()
{
    int max();
    int x,y,z,w;
    int m1,m2,m3;

    printf("\nΔώσε 4 ακέραιες τιμές: \n");
    scanf("%d%d%d%d", &x,&y,&z,&w);

    m1=max(x,y);
    m2=max(z,w);
    m3=max(m1,m2);

    printf("\nΗ μέγιστη τιμή είναι: %d\n", m3);

}


// Απλή συνάρτηση που επιστρέφει το μέγιστο μεταξύ δυο αριθμών.
int max(int x, int y)
{
    if (x>y)
    {
        return x;
    }
    else
    {
        return y;
    }
}
