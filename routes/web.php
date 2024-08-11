<?php

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/post', function () {
    //eager loading manual
    // $posts = Post::with(['author', 'category'])->latest()->get();

    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search']))->latest()->get()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

//route model binding, search by instance object
Route::get('/post/{post:slug}', function (Post $post) {

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    //eager loading manual
    // $posts = $user->posts->load('category', 'author');

    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/category/{postCategory:slug}', function (PostCategory $postCategory) {
    //eager loading manual
    // $posts = $postCategory->posts->load('category', 'author');

    return view('posts', [
        'title' => count($postCategory->posts) . ' Articles ' . $postCategory->name,
        'posts' => $postCategory->posts
    ]);
});
