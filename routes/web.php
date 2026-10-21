<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/kontak', function () {
    return view('page.kontak');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');