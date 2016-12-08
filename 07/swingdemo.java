import java.applet.*;
import javax.swing.*;
import java.awt.*;

public class swingdemo extends JApplet{
    Container messageArea = getContentPane();
    MessagePanel myMessagePanel = new MessagePanel();
    public void init(){
        messageArea.add(myMessagePanel);
    }
}
class MessagePanel extends JPanel{
    public void paintComponent(Graphics g){
        super.paintComponent(g);
        g.setColor(Color.red);
        g.fillRect(10,10,80,80);
        g.setColor(Color.green);
        g.fillOval(200,200,100,100);
    }
}

