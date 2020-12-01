/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication9.epanalhpsh;

import javax.swing.JOptionPane;

/**
 *
 * @author nthom
 */
public class JavaApplication9Epanalhpsh {

    /**
     * @param args the command line arguments
     */
    /*
    Να γραφεί πρόγραμμα που να δέχεται από τον χρήστη δυο αριθμούς
    integer και να επιστρέφει το άθροισμα τους
    */
    public static void main(String[] args) {
        JOptionPane.showMessageDialog(
                null, "Hello!");
        
        int a,b;
        a=Integer.parseInt(JOptionPane.showInputDialog(
                "Δώσε έναν αριθμό"));
        b=Integer.parseInt(JOptionPane.showInputDialog(
                "Δώσε άλλον έναν αριθμό"));     
        
        JOptionPane.showMessageDialog(
                null, "Το άθροισμα είναι "+ (a+b)
        );
       
    }
    
}
