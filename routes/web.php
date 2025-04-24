<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('components.about.index');
})->name('about');

Route::get('/blog', function () {
    return view('components.blog.index');
})->name('blog');

Route::get('/portfolio', function () {
    return view('components.portfolio.index');
})->name('portfolio');

Route::get('/contact', function () {
    return view('components.contact-us.index');
})->name('contact');


// service-routes
Route::get('/service/custom-stand', function () {
    return view('components.services.custom-stand.index');
})->name('custom-stand');
