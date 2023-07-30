package pkginterface;
public class myinterface 
{
 public interface MyFirstInterface
 {
  final int x=10;   //The variable "x" is automatically considered as public static final by default when declared inside an interface. This means it is a constant and cannot be changed once initialized
////when declare a method inside an interface, it is automatically considered as an abstract method by default. 
  //
 void display();
 }  
 }

