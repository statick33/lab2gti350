package log350.example.example6;

import android.app.Activity;
import android.os.Bundle;
import android.view.Window;
import android.view.WindowManager;


/**
 * <b>Description</b> This example is a sample drawing canvas.
 * The user can use a single finger to draw a line.
 * This class is the activity of the application.  
 * <p> 
 * <b>Date</b> 2012-07-03
 * @author Mathieu Villeneuve
 */
public class Log350Example6Activity extends Activity {
    DrawingView drawView;

	/** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        
        //Setting application for fullscreen mode
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        
        //Setting the view
        drawView = new DrawingView(this);        
        setContentView(drawView);
        
        drawView.requestFocus();
    }
}

