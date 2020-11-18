/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mathima3.online.random;

import java.util.Random;

/**
 *
 * @author nthom
 */
public class Mathima3OnlineRandom {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Random rand = new Random();
        int[] sides= new int[10];
        System.out.print("Ο τυχαίος αριθμός είναι "); 
        System.out.println(rand.nextInt(10)+1);
        // Το όριο είναι ένας αριθμός από το 0-9. 
        // Για να συμπεριλάβω και το 10 βάζω +1
       
        
        /* * Για να τσεκάρουμε το randomness. 
           * Βλέπουμε πόσες φορές έφερε τον κάθε αριθμό,
           * με τις παρακάτω for 
        */
        
        for(int i=0; i<10; i++)
            sides[rand.nextInt(10)]++;
        for(int i=0; i<10; i++)
        System.out.println((i+1)+" "+sides[i]);
    }
    
}