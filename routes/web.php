<?php

     use App\Http\Controllers\ContactController;
     use Illuminate\Support\Facades\Route;

     Route::get('/', [ContactController::class, 'home'])->name('home');
     Route::get('/about', [ContactController::class, 'about'])->name('about');
     Route::get('/projects', [ContactController::class, 'projects'])->name('projects');
     Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
     Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');