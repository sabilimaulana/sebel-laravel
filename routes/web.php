<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

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

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sabili Maulana",
        "email" => "spacysbl.learn@gmail.com",
        "image" => "https://avatars.githubusercontent.com/u/63346492?v=4"

    ]);
});

// Blog
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

// Categories
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "posts" => $category->posts->load(['author', 'category']),
    ]);
});


// Author
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Category : $author->name",
        "posts" => $author->posts->load(['author', 'category']),
    ]);
});
