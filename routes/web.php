<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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

Route::get('/post/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
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

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('about', ['title' => 'About Page']);
});
