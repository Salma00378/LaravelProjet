<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/posts/list', [App\Http\Controllers\PostController::class, 'index'])->name('posts.list');


    Route::get('/posts/{id}/editer', [App\Http\Controllers\PostController::class, 'editer'])->name('posts.edit');

    Route::put('/posts/{id}', [App\Http\Controllers\PostController::class, 'modifier'])->name('posts.update');


    Route::post('/posts', [App\Http\Controllers\PostController::class, 'ajouter'])->name('posts.store');

    Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'supprimer'])->name('posts.delete');

    Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'afficher'])->name('posts.show');

    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'createPost'])->name('post.create');


});



