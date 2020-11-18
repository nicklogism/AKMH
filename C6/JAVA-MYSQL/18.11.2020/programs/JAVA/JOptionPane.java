/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 * Σχετικά με JOptionPane. Κουτί που εμφανίζει μήνυμα στην οθόνη.
 */
package mathima3.online.pkg2;

import java.awt.Component;
import javax.swing.JOptionPane;

/**
 *
 * @author 
 */
public class Mathima3Online2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String s;
         JOptionPane.showMessageDialog(null, "Hello this is how JOptionPane works");
        s=JOptionPane.showInputDialog("Please give a string");
        JOptionPane.showMessageDialog(null, s);
    }
    
}
