package pkginterface;
public class InterfaceImplemented implements MyFirstInterface {
    @Override
    public void display() {
        // Attempting to change the value of 'x'
        // This will result in a compilation error
        x = 20;
        System.out.println("The value of x: " + x);
    }
}
