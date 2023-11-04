<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    return Blog::find('my-first-post');
    $blogs = Blog::all();


    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('blogs/{blog}', function($slug){
   return view('blog',[
       'blog' => Blog::find($slug)
   ]);
})->where('blog', '[A-z_\-]+');

