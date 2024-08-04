<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(
            static::all(),
            fn ($post) =>
            $post['slug'] == $slug
        );

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
