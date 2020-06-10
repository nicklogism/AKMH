# include <stdio.h>
// Παράδειγμα από πιστοποίηση.
// Ο χρήστης δίνει τιμές. Μόλις δώσει τη τιμή 0 το πρόγραμμα τερματίζει και εκτυπώνει το μέσο όρο των τιμών που έδωσε ο χρήστης.

main()

{
    int sum, count,num;
    float avg;
    sum=0;
    count=0;

    scanf("%d", &num);
    while (num!=0)
    {
        sum+=num;
        count++;
        scanf("%d", &num);
    }
    if (count=!0)
    avg=sum/(count*1.0);
}
