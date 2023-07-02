<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/settings', function () {
    return view('dashboard.settings');
})->name('dashboard.settings');
