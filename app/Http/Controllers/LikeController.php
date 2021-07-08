<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(Request $request)
    {
        $likes = Like::all();
        return response()->json([
            'data' => $likes
        ], 201);
    }

    public function create(Request $request)
    {
        $target =Like::where(['person_id'=>$request->person_id, 'post_id'=>$request->post_id]);
        if($target->exists()){
            $item = $target->delete();
        }else{
            $this->validate($request, Like::$rules);
            $form = $request->all();
            $item = Like::create($form);
        }
        return response()->json([
            'data' => $item
        ], 201);
    }
}
