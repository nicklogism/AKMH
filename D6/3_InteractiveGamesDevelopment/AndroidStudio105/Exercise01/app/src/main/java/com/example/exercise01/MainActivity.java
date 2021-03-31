package com.example.exercise01;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    private final String TAG = this.getClass().getSimpleName();
    private Button countButton;
    private Button toastButton;
    private TextView textView;
    private int counter = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        countButton = (Button) findViewById(R.id.countButton);
        toastButton = (Button) findViewById(R.id.toastButton);
        textView = (TextView) findViewById(R.id.textView);

        toastButton.setOnClickListener(toastClick);
        countButton.setOnClickListener(countClick);

    }

    private View.OnClickListener countClick = new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            shortCountClick();
        }
    };

    private View.OnClickListener toastClick = new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            shortToastClick();
        }
    };

    private void shortCountClick() {
        ++counter;
        textView.setText(Integer.toString(counter));
    }


    private void shortToastClick() {
        Toast.makeText(MainActivity.this, "Hello Toast", Toast.LENGTH_SHORT).show();
    }



    @Override
    protected void onStart () {
        super.onStart();
        Log.d(TAG, "onStart");
    }

    @Override
    protected void onStop () {
        super.onStop();
        Log.d(TAG, "onStop");
    }

    @Override
    protected void onDestroy () {
        super.onDestroy();
        Log.d(TAG, "onDestroy");
    }
}