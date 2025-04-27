<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/contacts', function() {
    return view('contact');
})->name('contact');

Route::get('/about', [FeedbackController::class, 'index'])->name('about');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::post('/records', [RecordController::class, 'store'])->name('records');
