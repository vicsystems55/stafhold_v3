<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsletterController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/who-we-are', 'whoWeAre')->name('who-we-are');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/blog', 'blog')->name('blog');
       Route::get('/contact', 'contact')->name('contact');
    Route::get('/post/{slug}', 'post')->name('post');
});

Route::post('/subscribe', [NewsletterController::class, 'store'])->name('subscribe.store');
Route::get('/subscribe/success', [NewsletterController::class, 'success'])->name('subscribe.success');
