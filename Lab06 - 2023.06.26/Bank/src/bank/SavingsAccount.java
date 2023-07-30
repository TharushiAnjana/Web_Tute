package bank;
public class SavingsAccount extends BankAccount
{
final private double interest=.12;
    @Override
    public void calculateInterest()
    {
        System.out.println(" Saving Account Interest is " +Bal*interest);
        
    }
    

}
