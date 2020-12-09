/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkgclass;

/**
 *
 * @author nthom
 */
public class Class {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Account chris = new Account("Nick",50,32);
        
       /* Προ constructor. Μετά constructor θέλω τιμές μέσα στο Account όπως
        παραπάνω.
        
        chris.name = "Chris";
        chris.credit = 10;
        chris.debit = 5;
        */
        
        System.out.println(chris.name+" | "+chris.credit+" | "+chris.debit);
    }
    
}
