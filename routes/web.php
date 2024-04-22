<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    
    // do something before

    return view("home");
});

Route::view('/about', 'about');