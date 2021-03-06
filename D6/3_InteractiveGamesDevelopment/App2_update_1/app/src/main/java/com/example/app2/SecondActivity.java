package com.example.app2;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

import java.util.ArrayList;
import java.util.List;

public class SecondActivity extends AppCompatActivity {
    private RecyclerView requestRecView;
    private LinearLayoutManager verticalLayoutManager;
    private List<MyPost> posts;
    private MyListAdapter requestAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.my_list);

        posts = new ArrayList<>();
        posts.add(new MyPost("Title1", "Story1", "ic_launcher_1"));
        posts.add(new MyPost("Title2", "Story2", "ic_launcher_2"));
        posts.add(new MyPost("Title3", "Story3", "ic_launcher_1"));
        posts.add(new MyPost("Title4", "Story4", "ic_launcher_2"));

        requestRecView = (RecyclerView) findViewById(R.id.requestRecView);
        verticalLayoutManager = new LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false);
        requestRecView.setLayoutManager(verticalLayoutManager);
    }
}