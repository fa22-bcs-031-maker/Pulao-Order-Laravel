<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulaoController;

// Route for Home Page (shows order form)
Route::get('/', [PulaoController::class, 'home'])->name('home');

// Route for About Page
Route::get('/about', [PulaoController::class, 'about'])->name('about');

// Route for Order Submission WE WIll handles form POST REquest i.e Order Submission
Route::post('/order', [PulaoController::class, 'placeOrder'])->name('order.place');
