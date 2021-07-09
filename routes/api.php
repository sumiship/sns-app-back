<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'create']);
Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::get('/like', [LikeController::class, 'index']);
Route::post('/like', [LikeController::class, 'create']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
