<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Radian Try Darmawan' , 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});


Route::get('/posts/{slug}', function($slug) {
    $posts = [
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
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
        ]
    ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post','post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});