<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        $users = User::all();
        return  view('posts.create', compact('users'));

    }

    public function save(StorePostRequest $request){

        $post = Post::create($request->except('_token'));

        return back()->with('post', $post);
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
}
