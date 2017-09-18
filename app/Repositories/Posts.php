<?php

namespace App\Repositories;

use App\Post;

use App\Demo;

class Posts
{
    protected $demo;

    public function __construct(Demo $demo)
    {
        $this->demo = $demo;
    }

    public function all()
    {
        return Post::all();
    }

    public function find()
    {
        //...
    }
}
