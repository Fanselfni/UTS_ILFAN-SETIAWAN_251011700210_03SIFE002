<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CraftController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/kontak', function () {
    return view('page.kontak');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/craft', [CraftController::class, 'index'])->name('craft.index');
Route::get('/craft/{id}', [CraftController::class, 'show'])->name('craft.show');