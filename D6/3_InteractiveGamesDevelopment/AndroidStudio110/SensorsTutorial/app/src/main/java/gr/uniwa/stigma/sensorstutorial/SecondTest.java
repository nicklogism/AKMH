package gr.uniwa.stigma.sensorstutorial;

import androidx.appcompat.app.AppCompatActivity;

import android.animation.ObjectAnimator;
import android.content.Context;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;


/*
* Multiple of a second	Unit	Definition
10−9	1 nanosecond	One billionth of one second
10−6	1 microsecond	One millionth of one second
10−3	1 millisecond	One thousandth of one second
10−2	1 centisecond	One hundredth of one second

* */
public class SecondTest extends AppCompatActivity implements SensorEventListener {
    private final String TAG="Sensors tutorial";
    private SensorManager sensorManager;
    private final float[] accelerometerReading = new float[3];
    private final float[] magnetometerReading = new float[3];

    private final float[] rotationMatrix = new float[9];
    private final float[] orientationAngles = new float[3];

    private long timestamp;


    private Button button;
    private Button button1;
    private ImageView imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second_test);
        button = (Button) findViewById(R.id.button);
        button.setOnClickListener(buttonClick);
        button1 = (Button) findViewById(R.id.button1);
        button1.setOnClickListener(button1Click);
       // button.setOnClickListener(buttonsClick);
     //   button1.setOnClickListener(buttonsClick);
        imageView = (ImageView) findViewById(R.id.imageView);
        sensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);
    }
/*
    private View.OnClickListener buttonsClick= new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            if(v.getId()==R.id.button){
                Anime(1);
            }else if(v.getId()==R.id.button1){
                Anime(0);
            }

        }
    };

    private synchronized void  Anime(int x){
        if(x==1){
            ObjectAnimator animation = ObjectAnimator.ofFloat(imageView, "translationY", 700f,-200f,400f,-100f,0f);
            animation.setDuration(5000);
            animation.start();
        }else{
            ObjectAnimator animation = ObjectAnimator.ofFloat(imageView, "translationX", 400f,-300f,200f,-100f,0f);
            animation.setDuration(5000);
            animation.start();
        }

    }
*/
    private View.OnClickListener buttonClick= new View.OnClickListener() {
        @Override
        public void onClick(View v) {
           // ObjectAnimator animation = ObjectAnimator.ofFloat(imageView, "translationY", 700f,-200f,400f,-100f,0f);
            ObjectAnimator animation = ObjectAnimator.ofFloat(imageView, "translationY", -700f);
            animation.setDuration(5000);
            animation.start();
        }
    };
    private View.OnClickListener button1Click= new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            ObjectAnimator animation = ObjectAnimator.ofFloat(imageView, "translationX", 800f,-300f,200f,-100f,0f);
            animation.setDuration(5000);
            animation.start();
        }
    };

    @Override
    public void onSensorChanged(SensorEvent event) {
        //Log.d(TAG,"onSensorChanged="+event.sensor.getType());
        //Log.d(TAG,"timestamp="+timestamp+" event.timestamp="+event.timestamp);
        if(timestamp!=0 ){  // not first event
            if(event.timestamp-timestamp>250000000) { // enought time between events 0.25 sec
                if (event.sensor.getType() == Sensor.TYPE_ACCELEROMETER) {
                    // Αντιγράφω τις τιμές του event στον πίνακα accelerometerReading
                    System.arraycopy(event.values, 0, accelerometerReading, 0, accelerometerReading.length);
                } else if (event.sensor.getType() == Sensor.TYPE_MAGNETIC_FIELD) {
                    System.arraycopy(event.values, 0, magnetometerReading, 0, magnetometerReading.length);
                }
                updateOrientationAngles();
                timestamp=event.timestamp;
            }
        }else{   // first event
            //Log.d(TAG,"first event");
            if (event.sensor.getType() == Sensor.TYPE_ACCELEROMETER) {
                // Αντιγράφω τις τιμές του event στον πίνακα accelerometerReading
                System.arraycopy(event.values, 0, accelerometerReading, 0, accelerometerReading.length);
            } else if (event.sensor.getType() == Sensor.TYPE_MAGNETIC_FIELD) {
                System.arraycopy(event.values, 0, magnetometerReading, 0, magnetometerReading.length);
            }
            updateOrientationAngles();
            timestamp=event.timestamp;
        }

    }

    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {

    }


    // Compute the three orientation angles based on the most recent readings from
    // the device's accelerometer and magnetometer.
    public void updateOrientationAngles() {
        // Update rotation matrix, which is needed to update orientation angles.
        SensorManager.getRotationMatrix(rotationMatrix, null, accelerometerReading, magnetometerReading);
        // "rotationMatrix" now has up-to-date information.
        SensorManager.getOrientation(rotationMatrix, orientationAngles);
        // "orientationAngles" now has up-to-date information.
        //orientationAngles[0]: azimouth -> rotation of z axis, orientationAngles[1]: pitch -> rotation of x axis , orientationAngles[2]: roll -> rotation of y axis
        //Log.d(TAG,"z="+orientationAngles[0]+", x="+orientationAngles[1]+", y="+orientationAngles[2]);

        // O x άξονας διατρέχει οριζόντια την συσκευή όταν αυτή είναι σε portrait
        Log.d(TAG,"x="+orientationAngles[1]);
        // O y άξονας διατρέχει κάθετα την συσκευή όταν αυτή είναι σε portrait. Πιάνει την κίνηση από portrait σε landscape.
        //Log.d(TAG,"y="+orientationAngles[2]);

    }


    @Override
    protected void onResume() {
        super.onResume();
        timestamp=0;

        // Get updates from the accelerometer and magnetometer at a constant rate.
        // To make batch operations more efficient and reduce power consumption,
        // provide support for delaying updates to the application.
        //
        // In this example, the sensor reporting delay is small enough such that
        // the application receives an update before the system checks the sensor
        // readings again.
        Sensor accelerometer = sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);
        if (accelerometer != null) {
            // Ο χρόνος που θα παρέλθει απότην ώρα του συμβάντος μέχριτην κοινοποίηση του στην εφαρμογή -> SENSOR_DELAY_UI
            //sensorManager.registerListener(this, accelerometer, SensorManager.SENSOR_DELAY_NORMAL, SensorManager.SENSOR_DELAY_UI);
            sensorManager.registerListener(this, accelerometer, SensorManager.SENSOR_DELAY_NORMAL, SensorManager.SENSOR_DELAY_UI);
        }
        Sensor magneticField = sensorManager.getDefaultSensor(Sensor.TYPE_MAGNETIC_FIELD);
        if (magneticField != null) {
            sensorManager.registerListener(this, magneticField, SensorManager.SENSOR_DELAY_NORMAL, SensorManager.SENSOR_DELAY_UI);
        }

    }

    @Override
    protected void onPause() {
        super.onPause();

        // Don't receive any more updates from either sensor.
        sensorManager.unregisterListener(this);
    }
}