<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/singleCard', function () {
    return view('singleCard');
})->name('singleCard');
