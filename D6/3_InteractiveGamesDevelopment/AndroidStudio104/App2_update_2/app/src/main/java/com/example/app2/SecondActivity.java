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
    private MyListAdapter adapter;

    private MyListAdapter requestAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.my_list);

        posts = new ArrayList<>();
        posts.add(new MyPost("Title1", "Story1", "ic_launcher"));
        posts.add(new MyPost("Title2", "Story2", "ic_launcher_2"));
        posts.add(new MyPost("Title3", "Story3", "neon_cube"));
        posts.add(new MyPost("Title4", "Story4", "ic_launcher"));
        posts.add(new MyPost("Title5", "Story5", "ic_launcher_2"));
        posts.add(new MyPost("Title6", "Story6", "neon_cube"));
        posts.add(new MyPost("Title7", "Story7", "ic_launcher"));
        posts.add(new MyPost("Title8", "Story8", "ic_launcher_2"));

        requestRecView = (RecyclerView) findViewById(R.id.requestRecView);
        verticalLayoutManager = new LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false);
        requestRecView.setLayoutManager(verticalLayoutManager);
        adapter = new MyListAdapter(posts, this);
        requestRecView.setAdapter(adapter);
    }
}