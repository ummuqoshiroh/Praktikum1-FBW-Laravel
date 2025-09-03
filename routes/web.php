<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // home.blade.php
});

Route::get('/laravel', function () {
    return view('laravel'); // laravel.blade.php
});
