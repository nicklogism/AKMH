/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package threatsexample;

import threatsexample.data.DataObject;
import threatsexample.runnables.Runnable1;
import threatsexample.runnables.Runnable2;
import threatsexample.runnables.Runnable3;

/**
 *
 * @author NUC_2
 */
public class ThreadsExample {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
//        Thread1 thread1 = new Thread1();        
//        thread1.start();
//        
//        Thread2 thread2 = new Thread2();        
//        thread2.start();
       
// Εκτελούνται όλα στο main thread  ----------------------
//       Runnable1 runn1 = new Runnable1("runn1");
//       runn1.run();
//       Runnable1 runn2 = new Runnable1("runn2");
//       runn2.run();
 // -------------------------------------------------
 
 // Ανεξάρτητη παράλληλη εκτέλεση 
//       Runnable1 runn3 = new Runnable1("runn3");
//       Runnable1 runn4 = new Runnable1("runn4");
//       
//       Thread runn3Trhead = new Thread(runn3);
//       Thread runn4Trhead = new Thread(runn4);
//       runn3Trhead.start();
//       runn4Trhead.start();
       // διακοπή εκτέλεσης νήματος.
       //runn3Trhead.interrupt();
//---------------------------------------------------------------

// concurency problems ------- and solution with synchronized ------------------------------------
       // create object for data
//       DataObject data1 = new DataObject(0);
//       
//       Runnable2 runn1 = new Runnable2("runn1", data1);
//       Runnable2 runn2 = new Runnable2("runn2",data1);
//       
//       Thread runn1Trhead = new Thread(runn1);
//       Thread runn2Trhead = new Thread(runn2);
//       runn1Trhead.start();
//       runn2Trhead.start();
 // -----------------------------------------------------------------------
 
 
  // concurency problems ------- and solution with atomic ------------------------------------     
  
    DataObject data1 = new DataObject(0);
       
       Runnable3 runn1 = new Runnable3("runn1", data1);
       Runnable3 runn2 = new Runnable3("runn2",data1);
       
       Thread runn1Trhead = new Thread(runn1);
       Thread runn2Trhead = new Thread(runn2);
       runn1Trhead.start();
       runn2Trhead.start();
       
       
    }
    
}
