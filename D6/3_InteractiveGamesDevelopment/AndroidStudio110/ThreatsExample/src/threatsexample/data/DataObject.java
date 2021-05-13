/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package threatsexample.data;

import java.util.concurrent.atomic.AtomicInteger;

/**
 *
 * @author NUC_2
 */
public class DataObject {
    private int amount;
    private AtomicInteger atomicAmount;
    
 

    public DataObject(int amount) {
        this.amount = amount;
        this.atomicAmount = new AtomicInteger(amount);

    }

   
    
     public DataObject() {       
    }
    

    public int getAmount() {
        return amount;
    }

    public void setAmount(int amount) {
        this.amount = amount;
    }
    
    public synchronized void setAmount2(int amount){
        this.amount = amount;
    } 
     public synchronized int getAmount2() {
        return amount;
    }

    public int getAtomicAmount() {
        return atomicAmount.get();
    }

    public void setAtomicAmount(int atomicAmount) {
        this.atomicAmount.set(atomicAmount);
    }
     
     public int addAndGetAmount(int amount){
         return this.atomicAmount.addAndGet(amount);
     }
     


   
     
    
}
