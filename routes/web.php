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
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
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

    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/category/{postCategory:slug}', function (PostCategory $postCategory) {

    return view('posts', [
        'title' => count($postCategory->posts) . ' Articles categories by ' . $postCategory->name,
        'posts' => $postCategory->posts
    ]);
});