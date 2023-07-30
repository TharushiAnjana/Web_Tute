package bank;
abstract class BankAccount 
{
    private int AccNo;
    protected int Bal;
  
    public void setAccountNumber(int AccNo)
    {
        this.AccNo=AccNo;
}
        public void setBalance(int Bal)
    {
        this.Bal=Bal;
}
    public int getAccountNumber()
    {
        return AccNo;
}
        public int getBalance()
    {
        return Bal;
}
        
   public abstract void calculateInterest();     
        
        
}
