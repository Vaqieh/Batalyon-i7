<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DataDiriNaylaController;
use App\Http\Controllers\timController;

Route::get('/vaqieh', function () {
    return view('ViewVaqieh');
});

Route::resource('tim', timController::class);
// Route::get('/tim',[App\Http\Controllers\timController::class],'index');

Route::get('datadiri', [DataDiriController::class, 'index']);
Route::get('datanayla', [DataDiriNaylaController::class, 'index']);

