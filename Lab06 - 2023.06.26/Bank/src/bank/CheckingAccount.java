package bank;
public class CheckingAccount extends BankAccount
{final private double interest2=.02;
    @Override
    public void calculateInterest() 
    {
       System.out.println(" Checking Account Interest is " +(Bal*interest2));
        System.out.println("");
    }
   
}
