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
                'slug' => 'article-title-1',
                'title' => 'Article Title 1',
                'author' => 'Radian Try Darmawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
            ],

            [
                'id' => 2,
                'slug' => 'article-title-2',
                'title' => 'Article Title 2',
                'author' => 'Radian Try Darmawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate skibidi'
            ]
        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    }
}
