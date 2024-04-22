<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home']);
Route::get('/contact', [FrontController::class, 'contact']);

Route::view('/about', 'about');