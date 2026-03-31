<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Language switcher
Route::get('/lang/{locale}', function (string $locale) {
    $supported = ['en', 'fr'];
    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
