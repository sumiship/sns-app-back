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
            $post->person_name = $post->person->name;
            $post->like_count = $post->likes()->count();
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
        // return $item->person()->get();
        // return $item->getData();
        // // return $item->getData
        return response()->json([
            'data' => $item
        ], 201);
    }
}
