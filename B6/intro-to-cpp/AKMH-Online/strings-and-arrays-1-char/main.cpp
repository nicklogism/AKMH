/*Αλφαριθμητικα και πίνακες*/

#include <iostream>
#include <string>

using namespace std;

int main()
{
    char const *onomata[3]={"nikos","ioulia","elpiniki"};
    /* Ο δείκτης εδώ μας επιτρέπει να καταχωρήσουμε παραπάνω από έναν χαρακτήρες
    σε κάθε θέση του πίνακα. Πχ nikos αντί για n */
    
    /* Ίσως πιο συνηθισμένος τρόπος είναι ο παρακάτω. Όπου η δεύτερη διάσταση ορίζει
    τον μέγιστο αριθμ΄ο χαρακτήρων. Πχ έως 15 χαρακτήρες.*/
    char const onomata2[3][15]={"nikos","ioulia","elpiniki"};
    
    
    // Εμφάνιση δεδομένων πίνακα
    for (int i=0; i<3; i++)
    {
        cout << onomata[i] << endl;
        cout << onomata2[i] << endl;
    }
    
    
}