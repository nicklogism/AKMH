/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package threatsexample.runnables;

/**
 *
 * @author NUC_2
 */
public class Runnable1 implements Runnable {

    private String name;

    public Runnable1(String name) {
        this.name = name;
    }

    @Override
    public void run() {
        System.out.println(name + " running");
        try {
            for (int i = 40; i > 0; i--) {
                System.out.println("Thread: " + name + ", " + i);
                // sleap for 250ms
                Thread.sleep(250);
            }
            // διακοπή από το νήμα που προκάλεσε την εκτέλεση
        } catch (InterruptedException e) {
            System.out.println("Thread " + name + " interrupted.");
        }
        System.out.println("Thread " + name + " exiting.");
    }
   
}
