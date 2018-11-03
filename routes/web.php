<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Tag;
use App\Post;
use App\Video;
use App\Taggable;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
   $post=Post::findOrFail(2);
   $tag=Tag::findOrFail(2);
   $post->tags()->save($tag);

});
Route::get('/delete',function(){
   $post=Post::findOrFail(1);
   $post->tags()->delete();
});