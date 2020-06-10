/*statheres.c: Programma pou deixnei tin xrisi statherwn */

#include <stdio.h> //1. grafoume ta arxeia kefalidas

#define N 100 //2. Grafoume odigies define statherwn

//3. Edw mporoume na orisoume katholikes metavlites

//4. Edv mporoume na orisoume prototypa synartisewn

main()
{
    //5.1 Dilwsi statherwn kai metavlitwn tis main
    int i, sum; 
    const int number = 10; 
    
    //5.2 entoles tis main
    
    for (i=number; i<N; i++)
        sum = sum + i; 
    printf("To athroisma twn arithmwn [%d..%d] einai %d\n", number,N,sum);
}
//6. Edw mporoume na exoume ta swmata allwn synatrisewn
