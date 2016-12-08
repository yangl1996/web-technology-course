import java.applet.*;
import java.awt.*;

public class awtdemo extends Applet{
    public void paint(Graphics g){
        g.setColor(Color.red);
        g.fillRect(10,10,80,80);
        g.setColor(Color.green);
        g.fillOval(200,200,100,100);
    }
}

