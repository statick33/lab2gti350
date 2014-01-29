
package log350.example.example6;

public class MyButton {
	String label;
	int x0=0, y0=0; // in pixels
	int width = 0, height = 0; // in pixels
	public MyButton( String label, int x0, int y0, int width, int height ) {
		this.label = label;
		this.x0 = x0;
		this.y0 = y0;
		this.width = width;
		this.height = height;
	}
	public boolean contains( Point2D p /* in pixels */ ) {
		return x0 <= p.x() && p.x() <= x0+width && y0 <= p.y() && p.y() <= y0+height;
	}
	public void draw( GraphicsWrapper gw, boolean highlight ) {
		if ( highlight )
			gw.setColor( 1.0f, 0, 0, 0.5f );
		else
			gw.setColor( 1.0f, 1.0f, 1.0f, 0.5f );
		gw.fillRect( x0, y0, width, height );
		gw.setColor( 0.0f, 0.0f, 0.0f );
		gw.drawRect( x0, y0, width, height );



		float tentativeHeight = 100;
		gw.setFontHeight( (int)tentativeHeight );
		float tentativeWidth = gw.stringWidth( label );
		float finalWidth = width * 0.9f;
		float finalHeight = finalWidth * tentativeHeight / tentativeWidth;
		gw.setFontHeight( (int)finalHeight );
		gw.drawString( x0+(width-finalWidth)/2, y0+height-(height-finalHeight)/2, label );
	}
}

