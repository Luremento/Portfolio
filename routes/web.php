<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('home');
})->name('home');

Route::get('/about', function () {
     return view('about');
})->name('about');

Route::get('/projects', function () {
     return view('projects');
})->name('projects');

Route::get('/contact', function () {
     return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
