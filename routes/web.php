<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function (){
    return view('pages.services');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/faq', function(){
    return view('pages.faq');
});

// Language switcher
Route::get('/lang/{locale}', function (string $locale) {
    $supported = ['en', 'fr'];
    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
