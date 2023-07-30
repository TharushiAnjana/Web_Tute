package itemobj;
public class item
{
    
    private int location;
    private String description;
    public item(int x,String y)
    {
        location=x;
        description=y;
    }
    public void display()
    {
        System.out.println("Location "+location);
        System.out.println("Description "+description);
    }
    public void setlocation(int a)
{
    location=a;
}
public int getlocation()
{
    return location;
}

public void setdescription(String b)
{
    description=b;
}
public String getdescription()
{
   return description; }
}
