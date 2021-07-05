<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $items = Post::all();
        return response()->json([
            'data' => $items
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
}
