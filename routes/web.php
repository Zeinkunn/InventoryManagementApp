<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('products', ProductController::class);

use App\Http\Controllers\UserStoryController;

// Definisikan route untuk User Story
Route::get('/userstory', function () {
    return view('userstory');
})->name('userstory');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');
