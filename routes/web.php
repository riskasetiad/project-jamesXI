<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/gsap', function () {
    return view('coba');
});
Route::get('/backup', function () {
    return view('backup');
});
