<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/services', function () {
    return view('home.services');
});

Route::get('/contact', function () {
    return view('home.contact');
});