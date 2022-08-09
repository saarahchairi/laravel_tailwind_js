<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('service', function () {
    return view('pages.service');
})->name('service');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

