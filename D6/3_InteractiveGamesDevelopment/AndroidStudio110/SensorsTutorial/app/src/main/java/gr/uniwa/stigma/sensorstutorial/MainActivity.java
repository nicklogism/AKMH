package gr.uniwa.stigma.sensorstutorial;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.Build;
import android.os.Bundle;
import android.util.Log;

import java.util.List;

import static androidx.vectordrawable.graphics.drawable.PathInterpolatorCompat.EPSILON;


public class MainActivity extends AppCompatActivity implements SensorEventListener{
    private final String TAG="Sensors tutorial";
    private SensorManager sensorManager;
    private Sensor  mLight;
    private Sensor  gyroscope;


    // Create a constant to convert nanoseconds to seconds. (1sec -> 1.000.000.000 nano)
    private float NS2S = 1.0f / 1000000000.0f;
    private float[] deltaRotationVector;
    private float timestamp;


    private float[] rotationMatrix;
    private float[] georotationMatrix;
    private float[] accelerometerReading;
    private float[] magnetometerReading;
    private float[] orientationAngles ;

    @RequiresApi(api = Build.VERSION_CODES.M)  // for getSystemService
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
 /*You can use this class to create an instance of the sensor service.
 This class provides various methods for accessing and listing sensors, registering and unregistering sensor event listeners,
 and acquiring orientation information. This class also provides several sensor constants that are used to report sensor accuracy,
 set data acquisition rates, and calibrate sensors.*/
        sensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);





        List<Sensor> deviceSensors = sensorManager.getSensorList(Sensor.TYPE_ALL);
        for(Sensor sen:deviceSensors){
            Log.d("Sensors","sen.getName()"+ sen.getName()+", sen.getStringType()"+sen.getStringType());
        }

        /*You can also determine whether a specific type of sensor exists on a device by using the getDefaultSensor()
        method and passing in the type constant for a specific sensor.
        If a device has more than one sensor of a given type, one of the sensors must be designated as the default sensor.
        If a default sensor does not exist for a given type of sensor, the method call returns null, which means the device
        does not have that type of sensor. */
/*
        if (sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER) != null){
            Log.d("Sensors","Default ACCELEROMETER Sensor"+ sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER).getName());
        } else {
            Log.d("Sensors","no accelerometer has set");
        }

        if (sensorManager.getDefaultSensor(Sensor.TYPE_LIGHT) != null){
            mLight = sensorManager.getDefaultSensor(Sensor.TYPE_LIGHT);
        } else {
            Log.d("Sensors","there is not Light Sensor");
        }
*/
        if (sensorManager.getDefaultSensor(Sensor.TYPE_GYROSCOPE) != null){
            gyroscope = sensorManager.getDefaultSensor(Sensor.TYPE_GYROSCOPE);
        } else {
            Log.d("Sensors","there is not Light Sensor");
        }

        deltaRotationVector = new float[4];



/*
        rotationMatrix = new float[9];
        georotationMatrix= new float[9];
        accelerometerReading= new float[3];
        magnetometerReading= new float[3];
        SensorManager.getRotationMatrix(rotationMatrix, georotationMatrix,  accelerometerReading, magnetometerReading);

        orientationAngles = new float[3];
        SensorManager.getOrientation(rotationMatrix, orientationAngles);
*/
    }




    @Override
    protected void onResume() {
        super.onResume();
          /*The default data delay is suitable for monitoring typical screen orientation changes and uses a delay of 200,000 microseconds. (200 millis)
        You can specify other data delays, such as SENSOR_DELAY_GAME (20,000 microsecond delay), SENSOR_DELAY_UI (60,000 microsecond delay), or SENSOR_DELAY_FASTEST (0 microsecond delay).*/
        // Κάθε πότε θα γίνεται ακρόαση συμβάντος
        sensorManager.registerListener(this,  gyroscope, SensorManager.SENSOR_DELAY_NORMAL);

    }

    // Όταν γίνει pause σταματώ την λειτουργία του ακροατή
    @Override
    protected void onPause() {
        super.onPause();
        sensorManager.unregisterListener(this);
    }

    @Override
    public void onSensorChanged(SensorEvent event) {
        Log.d(TAG,"onSensorChanged");
        // This timestep's delta rotation to be multiplied by the current rotation
        // after computing it from the gyro sample data.
        if (timestamp != 0) {
            final float dT = (event.timestamp - timestamp) * NS2S;
            // Axis of the rotation sample, not normalized yet.
            float axisX = event.values[0];
            float axisY = event.values[1];
            float axisZ = event.values[2];

            // Calculate the angular speed of the sample
            float omegaMagnitude = (float)Math.sqrt(axisX*axisX + axisY*axisY + axisZ*axisZ);

            // Normalize the rotation vector if it's big enough to get the axis
            // (that is, EPSILON should represent your maximum allowable margin of error)
            if (omegaMagnitude > EPSILON) {
                axisX /= omegaMagnitude;
                axisY /= omegaMagnitude;
                axisZ /= omegaMagnitude;
            }

            // Integrate around this axis with the angular speed by the timestep
            // in order to get a delta rotation from this sample over the timestep
            // We will convert this axis-angle representation of the delta rotation
            // into a quaternion before turning it into the rotation matrix.
            float thetaOverTwo = omegaMagnitude * dT / 2.0f;
            float sinThetaOverTwo = (float)Math.sin(thetaOverTwo);
            float cosThetaOverTwo = (float)Math.cos(thetaOverTwo);
            deltaRotationVector[0] = sinThetaOverTwo * axisX;
            deltaRotationVector[1] = sinThetaOverTwo * axisY;
            deltaRotationVector[2] = sinThetaOverTwo * axisZ;
            deltaRotationVector[3] = cosThetaOverTwo;
            Log.d(TAG,"deltaRotationVector[0]="+deltaRotationVector[0]+",  deltaRotationVector[1]="+ deltaRotationVector[1]+", deltaRotationVector[2]="+deltaRotationVector[2]+", deltaRotationVector[3]="+deltaRotationVector[3]);
        }
        timestamp = event.timestamp;
        float[] deltaRotationMatrix = new float[9];
        SensorManager.getRotationMatrixFromVector(deltaRotationMatrix, deltaRotationVector);
        // User code should concatenate the delta rotation we computed with the current rotation
        // in order to get the updated rotation.
        // rotationCurrent = rotationCurrent * deltaRotationMatrix;
    }

    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {

    }
}