<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;



class Post {
    public static function all(){
        
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/post', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Noprizal',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Noprizal Malik',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Noprizal',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Noprizal Malik',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur, dolorum
            nihil eligendi
            voluptatibus, quas molestias veritatis, laudantium error cumque at cum hic. Qui, ea!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});
