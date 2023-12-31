<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Ibnu Faisal",
        "email" => "mibnufaisal@gmail.com",
        "phone" => "085647343441",
        "image" => "ibnufaisal.jpg"
    ]);
});

Route::get('/blog', [PostController::class,'index']);

// single post
Route::get('/post/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'posts',
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category','author')
      ]);
});