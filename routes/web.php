<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/post', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/post/{slug}', function ($slug) {


    $post = Post::find($slug);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});
