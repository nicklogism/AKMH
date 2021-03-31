package com.example.app2;

public class MyPost {
    private String title;
    private String story;
    private String imageName;

    public MyPost(String title, String story, String imageName) {
        this.title = title;
        this.story = story;
        this.imageName = imageName;
    }

    public String getTitle() {

        return title;
    }

    public void setTitle(String title) {

        this.title = title;
    }

    public String getStory() {

        return story;
    }

    public void setStory(String story) {

        this.story = story;
    }

    public String getImageName() {

        return imageName;
    }

    public void setImageName(String imageName) {

        this.imageName = imageName;
    }

    @Override
    public String toString() {
        return "MyPost{" +
                "title='" + title + '\'' +
                ", story='" + story + '\'' +
                ", imageName='" + imageName + '\'' +
                '}';
    }
}
