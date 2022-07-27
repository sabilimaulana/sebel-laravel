<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Cara Menjadi Bajak Laut",
            "slug" => "cara-menjadi-bajak-laut",
            "author" => "Sabili Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia impedit fugiat! Ipsa modi iste, rerum maxime possimus eveniet consequuntur officia esse, rem, perferendis quod quaerat. Itaque vero veniam quidem."
        ],
        [
            "title" => "Cara Menjadi Developer Game Indie",
            "slug" => "cara-menjadi-developer-game-indie",
            "author" => "Sabili Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia impedit fugiat! Ipsa modi iste, rerum maxime possimus eveniet consequuntur officia esse, rem, perferendis quod quaerat. Itaque vero veniam quidem."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Cara Menjadi Bajak Laut",
            "slug" => "cara-menjadi-bajak-laut",
            "author" => "Sabili Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia impedit fugiat! Ipsa modi iste, rerum maxime possimus eveniet consequuntur officia esse, rem, perferendis quod quaerat. Itaque vero veniam quidem."
        ],
        [
            "title" => "Cara Menjadi Developer Game Indie",
            "slug" => "cara-menjadi-developer-game-indie",
            "author" => "Sabili Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia impedit fugiat! Ipsa modi iste, rerum maxime possimus eveniet consequuntur officia esse, rem, perferendis quod quaerat. Itaque vero veniam quidem."
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Detail",
        "post" => $new_post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sabili Maulana",
        "email" => "spacysbl.learn@gmail.com",
        "image" => "https://avatars.githubusercontent.com/u/63346492?v=4"

    ]);
});
