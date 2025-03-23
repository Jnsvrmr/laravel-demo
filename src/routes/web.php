<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/vangsten', [PageController::class, 'vangsten'])->name('vangsten');
Route::get('/hobby', [PageController::class, 'hobby'])->name('hobby');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
