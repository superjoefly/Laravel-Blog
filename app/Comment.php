<?php

namespace App;

class Comment extends Model
{
    public function post()
    {
        // Associate Comments with Post
        return $this->belongsTo(Post::class);
        // App\Comment::first()->post()->get();
    }

    public function user()
    {
        // Associate Comments with User
        return $this->belongsTo(User::class);
    }
}
