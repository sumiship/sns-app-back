<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        foreach ($posts as $post){
            $post->like_count = $post->likes()->count();
            $post->person;
            $post->isLike = false;
            if($post->likes->where('person_id',$request->person_id)->first())$post->isLike = true;
        }
        return response()->json([
            'data' => $posts
        ], 201);
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $form = $request->all();
        $item = Post::create($form);
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Post $post,Request $request){
        $post->like_count = $post->likes()->count();
        $post->person;
        $post->isLike = false;
        if($post->likes->where('person_id',$request->person_id)->first())$post->isLike = true;
        return $post;
    }
}
