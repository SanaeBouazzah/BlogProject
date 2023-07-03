<?php

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard.index');
Route::get('/settings', [SettingController::class, 'index'])->name('dashboard.settings');

Route::post('/settings', function(){
  echo 'Hey';
})->name('dashboard.settings.update');
