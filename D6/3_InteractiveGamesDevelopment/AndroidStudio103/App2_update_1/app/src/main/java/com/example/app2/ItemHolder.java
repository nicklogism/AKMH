package com.example.app2;

import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class ItemHolder extends RecyclerView.ViewHolder {
    private TextView textView1;
    private TextView textView2;
    private ImageView imageView;

    public ItemHolder(@NonNull View itemView) {
        super(itemView);
        textView1= itemView.findViewById(R.id.textView1);
        textView2= itemView.findViewById(R.id.textView2);
        imageView = (ImageView) itemView.findViewById(R.id.imageView);
    }



    public TextView getTextView1() {
        return textView1;
    }

    public void setTextView1(TextView textView1) {
        this.textView1 = textView1;
    }

    public TextView getTextView2() {
        return textView2;
    }

    public void setTextView2(TextView textView2) {
        this.textView2 = textView2;
    }

    public ImageView getImageView() {
        return imageView;
    }

    public void setImageView(ImageView imageView) {
        this.imageView = imageView;
    }
}
