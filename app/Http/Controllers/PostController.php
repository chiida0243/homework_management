<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
    // public function index(Post $post)
    // {
    //     return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    // }

    public function index()
    {
       $post = Post::orderBy('deadline')->get()->groupBy(function($date){
           return Carbon::parse($date->deadline)->format('Y-m-d');
           });
        return view('homework/index')->with(['posts' => $post]);
    }
    
    public function store(Post $post, PostRequest $request){
  
   $input = $request['post'];
    $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    $input +=['image_url'=>$image_url];
   $post->fill($input)->save();
    return redirect('homework/task_index');
}

    public function create(Post $post)
    {
        
        return view('homework/create')/*->with(['categories' => $category->get()])*/;
    }

//   public function submit_index(Post $post)
//   {
       
//       return view('homework/submit_index')->with(['posts'=> $post->getPaginateByLimit()]);
//   }
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
