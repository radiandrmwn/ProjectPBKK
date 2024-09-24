<?php

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
            'title' => 'Article Title 1',
            'author' => 'Radian Try Darmawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
        ],
        [
            'id' => 2,
            'title' => 'Article Title 2',
            'author' => 'Radian Try Darmawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
        ]
    ]]);
});


Route::get('/posts/{id}', function($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Article Title 1',
            'author' => 'Radian Try Darmawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
        ],
        [
            'id' => 2,
            'title' => 'Article Title 2',
            'author' => 'Radian Try Darmawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos incidunt reiciendis cupiditate quidem quibusdam repellendus et, dicta molestias culpa ex reprehenderit iste minima doloribus quae adipisci veritatis unde voluptatem nostrum.'
        ]
        ];
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});