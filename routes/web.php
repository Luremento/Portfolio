<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
});

Route::get('/about', function () {
     return view('about');
});

Route::get('/projects', function () {
     return view('projects');
});

Route::get('/contact', function () {
     return view('contact');
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/todo', function () {
     return view('todo');
});
