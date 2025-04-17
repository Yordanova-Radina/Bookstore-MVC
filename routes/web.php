<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    'user/store',
    [UserController::class, 'store']
)->name('user.store');

Route::get('/posts/add', function () {
    return view('add-post');
})->name('posts.add');

Route::post(
    '/post/store',
    [PostController::class, 'store']
)->name('posts.store');

Route::get(
    '/post/show/{post}',
    [PostController::class, 'show']
)->name('post.show');

Route::get('/login', function () {
    return view('login');
})->name('login');
