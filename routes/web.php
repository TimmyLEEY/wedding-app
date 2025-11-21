<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;

Route::get('/', function () { return view('home'); })->name('home');


Route::get('/upload', [UploadController::class, 'showForm']);
Route::post('/post', [UploadController::class, 'store']);
Route::get('/blog', [UploadController::class, 'showBlog'])->name('blog.show');
Route::post('/comments/{id}', [UploadController::class, 'storeComment'])->name('comments.store');
Route::post('/likes/{id}', [UploadController::class, 'storeLike'])->name('posts.like');


Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/download-all', [AdminController::class, 'downloadAll']);
});
