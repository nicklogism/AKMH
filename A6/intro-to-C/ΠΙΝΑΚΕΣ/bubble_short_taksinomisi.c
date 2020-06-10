# include <stdio.h>
// Ταξινόμηση στοιχείων πίνακα από τη μικρότερη τιμή στη μεγαλύτερη (με bubble short)

main()

{
    int A[]={5,9,7,1,2,4};
    int i,j,temp;

    for(i=1; i<6; i++)
        for(j=5;j>=1;j--)
    {
        if (A[j]<A[j-1])
        {
            temp=A[j];
            A[j]=A[j-1];
            A[j-1]=temp;
        }
    }

}
