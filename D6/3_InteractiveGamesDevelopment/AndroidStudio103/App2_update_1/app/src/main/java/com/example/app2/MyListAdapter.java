package com.example.app2;

import android.content.ClipData;
import android.security.identity.CipherSuiteNotSupportedException;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class MyListAdapter extends RecyclerView.Adapter<RecyclerView.ViewHolder>{
    List<MyPost> posts;

    public MyListAdapter(List<MyPost> posts) {
        this.posts = posts;
    }

    @NonNull
    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.list_item, parent, false);
        ItemHolder holder = new ItemHolder(view);
        return holder;
    }

    @Override
    public void onBindViewHolder(@NonNull RecyclerView.ViewHolder holder, int position) {
        ItemHolder item = (ItemHolder) holder;
        MyPost currentPost = posts.get(position);
        item.getTextView1().setText(currentPost.getTitle());
        item.getTextView2().setText(currentPost.getStory());
    }

    @Override
    public int getItemCount() {
        return posts.size();
    }
}
