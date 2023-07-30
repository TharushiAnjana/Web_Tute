package bank;
public class Bank {
public static void main(String[] args) 
{
BankAccount B1=new SavingsAccount();
    B1.setAccountNumber(100);
    B1.setBalance(2000000);
    B1.getAccountNumber();
    B1.getBalance();
    B1.calculateInterest();

    
    
    BankAccount B2=new CheckingAccount();
    B2.setAccountNumber(100);
    B2.setBalance(1000000);
    B2.getAccountNumber();
    B2.getBalance();
    B2.calculateInterest();

        }
}