import java.applet.*;
import java.awt.*;

public class dynamicdemo extends Applet{
    public void paint(Graphics g){
        int rc = Integer.parseInt(getParameter("r"));
        int gc = Integer.parseInt(getParameter("g"));
        int bc = Integer.parseInt(getParameter("b"));
        int sz = Integer.parseInt(getParameter("sz"));
        Color clr = new Color(rc,gc,bc);
        g.setColor(clr);
        g.fillOval(0,0,sz,sz);
    }
}

