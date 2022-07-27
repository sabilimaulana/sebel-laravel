<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        return static::all()->firstWhere("slug", $slug);
    }
}
