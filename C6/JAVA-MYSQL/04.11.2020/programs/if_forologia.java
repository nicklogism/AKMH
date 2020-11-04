/*
Να δημιουργήσετε ένα πρόγραμμα φορολογίας το οποίο θα
δέχεται έναν πραγματικό αριθμό ο οποίος αντιστοιχεί στο
εισόδημα ενός πολίτη και υπολογίζει το φόρο όπως παρακάτω :

Έως 1000 Ευρώ, ο φόρος είναι 0

Από 1000 μέχρι 2000 Ευρώ, ο φόρος είναι 200 Ευρώ.

Από 2000 μέχρι 3000 ο φόρος είναι 15 % του εισοδήματος πέραν
των 2000 Ευρώ

Για μεγαλύτερα ποσά είναι 25 % του εισοδήματος, πέραν των
3000 Ευρώ
*/

package javaapplication1;

import java.util.Scanner;

public class JavaApplication1 {

    public static void main(String[] args) {

        double income, tax;
        Scanner in = new Scanner(System.in);

        System.out.println("Eisagete to eisodhma sas: ");
        income = in.nextDouble();

        if (income <= 1000) {
            System.out.println("Tax=0");
        } else if (income <= 2000) {
            System.out.println("Tax=200€");
        } else if (income <= 3000) {
            tax = 200 + ((income - 2000) * 0.15);
            System.out.println("Tax="+tax);
        } else {
            tax = 200 + (1000 * 0.15) + ((income - 3000) * 0.25);
            System.out.println("Tax="+tax);
        }
    }
}
