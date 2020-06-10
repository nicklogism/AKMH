/* synarthseis3_calculator.c: Calculator με ελέγχους εγκυρότητας τιμών.*/

#include <stdio.h>


main()
{
    int sum(), sub(), mul(), div(); mod();
    int x,y;
    int ch; //από το choise, για επιλογή χρήστη.
    int res;

    // Το μενού για τον χρήστη με έλεγχο για τη σωστή τιμή
    do{
        do{
            printf("\nΕπιλογές Εφαρμογής: \n\n");
            printf("1. Πρόσθεση\n");
            printf("2. Αφαίρεση\n");
            printf("3. Πολλαπλασιασμός\n");
            printf("4. Διαίρεση\n");
            printf("5. Υπόλοιπο διαίρεσης\n");
            printf("6. Τερματισμός εφαρμογής\n");
            printf("\nΕισάγετε την επιλογή σας από 1-6: \n");
            scanf("%d", &ch);
            if (ch<1 || ch >6)
            {
                printf("Λάθος τιμή\n");
                printf("\nΕισάγετε την επιλογή σας από 1-6: \n");
            }
        }while(ch <1 || ch >6);

        if (ch>=1 && ch<=5)
        {
            printf("\nΕισάγετε δυο ακέραιες τιμές: \n");
            scanf("%d%d", &x, &y);

            if (ch==1)
            {
                res=sum(x,y);
                printf("Το αποτέλεσμα είναι: %d\n", res);
            }
            else if (ch==2)
            {
                res=sub(x,y);
                printf("Το αποτέλεσμα είναι: %d\n", res);
            }
            else if (ch==3)
            {
                res=mul(x,y);
                printf("Το αποτέλεσμα είναι: %d\n", res);
            }
            else if (ch==4)
            {
                while (y==0)
                {
                    printf("Δεν ορίζεται διαίρεση με το 0. Δώστε νέα τιμή: \n");
                    scanf("%d,", &y);
                }
                res=div(x,y);
                printf("Το αποτέλεσμα είναι: %d\n", res);
            }
            else
            {
                while (y==0)
                {
                    printf("Δεν ορίζεται διαίρεση με το 0. Δώστε νέα τιμή: \n");
                    scanf("%d,", &y);
                }
                res=mod(x,y);
                printf("Το αποτέλεσμα είναι: %d\n", res);
            }
        }
        else
            printf("\nΤερματισμός Εφαρμογής!!\n");

            }while (ch>=1 && ch<=5);
        printf("\nΕυχαριστούμε Πολύ\n");
}

// ΣΥΝΑΡΤΗΣΕΙΣ

// Πρόσθεσης.
int sum(int x, int y)
{
   return x+y;
}

// Αφαίρεσης.
int sub(int x, int y)
{
   return x-y;
}

// Πολλαπλασιασμού.
int mul(int x, int y)
{
   return x*y;
}

// Διαίρεσης
int div(int x, int y)
{
   return x/y;
}

// Υπόλοιπο
int mod(int x, int y)
{
   return x%y;
}
