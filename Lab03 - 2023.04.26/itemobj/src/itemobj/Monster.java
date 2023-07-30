package itemobj;
public class Monster extends item
{
    private int age;
    private String name;
    
    public Monster(int x,String y,int a,String n)
    {
        super(x,y);
    age=a;
    name=n;
    }
    public void displaymonster()
{
System.out.println("Location is "+age);
System.out.println("Description is "+name);
}

}
