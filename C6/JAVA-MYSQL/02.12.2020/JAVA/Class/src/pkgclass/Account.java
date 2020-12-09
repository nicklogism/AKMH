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
/* 
Όταν φτιάχνω μια Class: 
1) Ορίζω τι data θέλω να έχει η class
2) Φτιάχνω constructor 
3) Φτιάχνω getter & setters αν τους χρειάζομαι
*/
public class Account {
    String name ;
    double credit, debit;

    public Account(String name, double credit, double debit) {
        /* Όταν έχω παραμέτρους με το ίδιο όνομα, για να τις ξεχωρίζω
        τις ονομάζω διαφορετικά. Εξού και το this. Έτσι θα μπορώ να 
        αναφέρομαι στη μεταβλητή της Class με το this.name για παράδειγμα */
        this.name = name;
        this.credit = credit;
        this.debit = debit;
    }
    
    
}
