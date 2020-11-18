/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mathima3.online;

import java.util.Scanner;

/**
 *
 * @author 
 */
public class Mathima3Online {

    /**
     Σχετικά με input. 
     * @param args
     */
    public static void main(String[] args) {
    
        Scanner in = new Scanner(System.in);
        int a;
        System.out.println("Please give a number");
        a=in.nextInt();
        System.out.println(a);
        String s;
        in.nextLine();
        System.out.println("Please give a name");
        s=in.nextLine();
        System.out.println(s);                  
    }
}
