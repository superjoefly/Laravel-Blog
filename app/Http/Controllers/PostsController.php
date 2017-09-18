<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
// use App\Repositories\Posts;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
        'title' => 'required',
        'body' => 'required',
        'tag' => 'nullable|string'
        ]);


        // // Post::create(request(['title', 'body']));
        // auth()->user()->publish(
        //     new Post(request(['title', 'body']))
        // );

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);


        // Tinker (associate tags with posts):
        // $post = App\Post::first();
        // $tag = App\Tag::where('name', 'php')->first();
        // $post->tags()->attach($tag);


        // $post->tags()->sync([1,2,3]);
        $tags = [];
        if (!empty($_POST['tags'])) {
            foreach ($_POST['tags'] as $tag=>$id) {
                array_push($tags, $id);
                $post->tags()->sync($tags);
            }
        }


        session()->flash('message', 'Your post has been published!');

        return redirect('/');
    }
}
