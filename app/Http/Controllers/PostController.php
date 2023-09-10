<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Carbon\carbon;

class PostController extends Controller
{
    // public function index(Post $post)
    // {
    //     return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    // }

    public function index()
    {
        // $posts = $post->get();
        // deadline->format('Y-m-d');
        $posts_grouped = Post::orderBy('deadline')->get()->groupBy(function($itr){
           return Carbon::parse($itr->deadline)->format('Y-m-d');
           });
        //dd($post);
        return view('homework/index')->with(['posts_grouped' =>$posts_grouped]);
    }

    public function create(Post $post)
    {
        return view('homework/create')/*->with(['categories' => $category->get()])*/;
    }
    
    public function submit(Request $request, Post $post)
    {
        return view('homework/submit')->with(['post' => $post]);
    }

    // public function store(Post $post, Request $request)
    // {
    //     $input = $request['post'];
    //     $post->fill($input)->save();
    //     return redirect('/posts/' . $post->id);
    // }

    // public function edit(Post $post)
    // {
    //     return view('posts/edit')->with(['post' => $post]);
    // }

    // public function update(Request $request, Post $post)
    // {
    //     $input_post = $request['post'];
    //     $post->fill($input_post)->save();

    //     return redirect('/posts/' . $post->id);
    // }

}
