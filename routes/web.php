<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Show the form to create a new post
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    
    // Store a newly created post in the database
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
    // Show a specific post
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    
    // Show the form to edit an existing post
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    
    // Update an existing post in the database
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    
    // Delete an existing post from the database
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});


