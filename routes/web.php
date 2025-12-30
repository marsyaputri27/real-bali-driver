<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::view('/destinations', 'pages.destinations')->name('destinations');
Route::view('/cars', 'pages.cars')->name('cars');
Route::view('/packages', 'pages.packages')->name('packages');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

Route::get('/lang/{locale}', function ($locale) {
    $available = ['en', 'zh']; // Indonesia, English, Mandarin

    if (! in_array($locale, $available)) {
        abort(404);
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return back(); // balik ke halaman sebelumnya
})->name('lang.switch');
