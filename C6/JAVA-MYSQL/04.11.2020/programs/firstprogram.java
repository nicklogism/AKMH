package javaapplication1;

import java.util.Scanner;

public class JavaApplication1 {

    public static void main(String[] args) {

        int x, y;
        Scanner sc = new Scanner(System.in);

        System.out.println("Dwse enan akeraio");
        x = sc.nextInt();

        System.out.println("Dwse allon ena akeraio");
        y = sc.nextInt();

        System.out.println("Your integers are: x=" + x + " y=" + y);
        System.out.println("x+y=" + (x + y));
        System.out.println("x-y=" + (x - y));
        System.out.println("x.y=" + (x * y));
        System.out.println();

        if (y != 0) {
            System.out.println("Int Div x:y=" + (x / y));
            System.out.println("x:y=" + ((double) x / y));
            System.out.println("xMODy=" + (x % y));
        } else {
            System.out.println("Lathos timh! Adynath h diairesh me to 0");
        }

    }

}
