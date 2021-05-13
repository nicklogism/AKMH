/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package threatsexample.runnables;

import threatsexample.data.DataObject;

/**
 *
 * @author NUC_2
 */
public class Runnable3 implements Runnable {

    private String name;
    private DataObject data;

    public Runnable3(String name, DataObject data) {
        this.name = name;
        this.data = data;
    }
    
    

    @Override
    public void run() {
        System.out.println(name + " running");
        try {
            for (int i = 40; i > 0; i--) {
                System.out.println("Thread: " + name + ", " + i + ", change atomic amount to=" + data.addAndGetAmount(1));
                //System.out.println("Thread: " + name + ", " + i + ", change atomic amount to=" + data.addAndGetVolatileAmount(1));
                Thread.sleep(250);
            }
        } catch (InterruptedException e) {
            System.out.println("Thread " + name + " interrupted.");
        }
        System.out.println("Thread " + name + " exiting.");
    }

}
