<?php

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.settings');
})->name('dashboard.settings');
Route::resource('/settings', SettingController::class);

// Route::post('/settings', function(){
//   echo 'Hey';
// })->name('dashboard.settings.update');
