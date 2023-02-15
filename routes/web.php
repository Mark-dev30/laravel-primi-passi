<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $hello = 'Hello World';

    return view('home', compact('hello'));
})->name('home');

Route::get('/about-me', function () {
    return view('about_me');
})->name('about-me');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/my-blog', function () {
    return view('my_blog');
})->name('my-blog');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
