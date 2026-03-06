<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/what-we-do', function () {
    return view('what-we-do');
})->name('what-we-do');

Route::get('/about-us', fn () => redirect()->to(url('/') . '#about-us', 301))->name('about-us');

Route::post('/contact', ContactController::class)->name('contact.submit');
