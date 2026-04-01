<?php

use App\Http\Controllers\LebaranController;

Route::get('/', [LebaranController::class, 'index'])->name('beranda');
Route::get('/cerita', [LebaranController::class, 'cerita'])->name('cerita');
Route::get('/galeri', [LebaranController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [LebaranController::class, 'kontak'])->name('kontak');