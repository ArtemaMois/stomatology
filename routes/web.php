<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/contacts', function() {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('feedback', function () {
    return view('feedback');
})->name('feedback');


Route::get('/service', function () {
    return view('service');
})->name('service');
