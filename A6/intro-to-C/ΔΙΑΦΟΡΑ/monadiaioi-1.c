#include <stdio.h>
main() 
{
int x,y;

x = 3 ;
y = x++; //y=3 , x=4
printf("%d %d\n" , x++ , ++y ) ;
printf("%d %d\n" , ++x , ++y ) ;
printf("%d %d\n" , y++ + ++x , --y + --x ) ;
printf("%d %d\n" , ++y + --x , --y - ++x ) ;
}
