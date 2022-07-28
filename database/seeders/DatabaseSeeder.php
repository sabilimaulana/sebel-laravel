<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();


        // User::create([
        //     'name' => 'Sabili Maulana',
        //     'email' => 'laravel@sebel.com',
        //     'password' => bcrypt('12345678')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Pirate',
            'slug' => 'pirate'
        ]);

        \App\Models\Post::factory(10)->create();

        // Post::create([
        //     'title' => 'How to become a great pirate',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'how-to-become-a-great-pirate',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iste voluptates porro ea asperiores. Nam eaque laudantium minima, illo ducimus possimus deserunt? Praesentium nihil inventore, eligendi quidem nulla quaerat reiciendis illo quod, beatae debitis accusamus deserunt ad ipsum enim excepturi ratione commodi id optio iure tempora officiis illum velit sit!'
        // ]);
        // Post::create([
        //     'title' => 'How to sail the seven seas',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'how-to-sail-the-seven-seas',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iste voluptates porro ea asperiores. Nam eaque laudantium minima, illo ducimus possimus deserunt? Praesentium nihil inventore, eligendi quidem nulla quaerat reiciendis illo quod, beatae debitis accusamus deserunt ad ipsum enim excepturi ratione commodi id optio iure tempora officiis illum velit sit!'
        // ]);
        // Post::create([
        //     'title' => 'Rust vs Go',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'rust-vs-go',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quod.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iste voluptates porro ea asperiores. Nam eaque laudantium minima, illo ducimus possimus deserunt? Praesentium nihil inventore, eligendi quidem nulla quaerat reiciendis illo quod, beatae debitis accusamus deserunt ad ipsum enim excepturi ratione commodi id optio iure tempora officiis illum velit sit!'
        // ]);
    }
}
