package employee01obj;
public class employee
{
    private int age;
    private String empName;
    private String empDes;
    

public void setempage(int empID)
{
this.age=empID;

}
public int getempage()
{
return age;
}
public void setempname(String empName)
{
this.empName=empName;

}
public String getempname()
{
return empName;
}
public void  setDes(String empDes)
{
this.empDes=empDes;

}
public String getdes()
{
return empDes;
}
public void display()
{
  System.out.println("EMPLOYEE ID " +getempage());
    System.out.println("Employee name is "+getempname());
    System.out.println("Employee designation "+getdes());
    System.out.println("");
}
}