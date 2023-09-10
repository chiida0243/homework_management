<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

use Cloudinary;
use App\Http\Requests\PostRequest;

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
    
    public function store(Post $post, PostRequest $request){
        $user_id = auth()->user()->id;

        $input = $request['post'];
        $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input +=['image_url'=>$image_url];
        $input['user_id'] = $user_id;
        $post->fill($input)->save();
        return redirect('homework/task_index');
    }
    public function task_index(){
        $posts_grouped = Post::orderBy('deadline')->get()->groupBy(function($itr){
           return Carbon::parse($itr->deadline)->format('Y-m-d');
           });
        //dd($post);
        return view('homework.task_index')->with(['posts_grouped' =>$posts_grouped]);
    }

    public function create(Post $post)
    {
        
        return view('homework/create')/*->with(['categories' => $category->get()])*/;
    }
    
    public function submit(Request $request, Post $post)
    {
        return view('homework/submit')->with(['post' => $post]);
    }


}
