<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/contact', [ContactController::class, 'index'])->name('post.contact');
Route::post('submit', [ContactController::class, 'submitContactForm'])->name('contact.store');
Route::get('/blog/{slug}', [PostController::class, 'detail'])->name('blog.detail');
