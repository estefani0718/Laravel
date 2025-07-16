<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::paginate(8);
        $posts = Post::all();
        return Inertia::render('post/listar',["data" => [$posts]]);
        // return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(StorePostRequest $request){

       $rutaImage= Storage::disk('public')->putFile('posts',$request->file('file'));
    //    dd($request->file);

        $request['user_id']=2;
        $post=Post::create($request->all());
        dd($post);
        dd($request->all(), $validated);
        if($rutaImage){
            $post->image()->create()([
            'path'=> $rutaImage,
            'imageable_id'=>$post->id,
            'imageable_type'=>Post::class
            ]);
        };
    }
}
