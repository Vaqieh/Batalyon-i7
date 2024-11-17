<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DataDiriNaylaController;

Route::get('/tim', function () {
    return view('ViewVaqieh');
});

// Route::get('/tim',[App\Http\Controllers\timController::class],'index');
Route::get('/ferdinand', function () {
    return view('Ferdinand');
})->name('ferdinand');
Route::get('/nayla', function () {
    return view('Nayla');
})->name('nayla');


Route::get('datadiri', [DataDiriController::class, 'index']);
Route::get('datanayla', [DataDiriNaylaController::class, 'index']);

