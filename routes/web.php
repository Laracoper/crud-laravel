<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');

Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comments.show');

// Route::get('/comments/{id?}', [CommentController::class, 'show'])->name('comments.show');

Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');

Route::post('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');

Route::post('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

// Route::post('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');