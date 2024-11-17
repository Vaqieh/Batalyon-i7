<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\timController;
use App\Http\Controllers\DataDiriTataController;
use App\Http\Controllers\DataDiriVaqiehController;



Route::get('/vaqieh', function () {
    return view('ViewVaqieh');
});

Route::resource('tim', timController::class);
// Route::get('/tim',[App\Http\Controllers\timController::class],'index');
Route::get('/ferdinand', function () {
    return view('Ferdinand');
})->name('ferdinand');
Route::get('/nayla', function () {
    return view('Nayla');
})->name('nayla');
Route::get('/randy', function () {
    return view('Randy');
})->name('randy');
Route::get('/tata', function () {
    return view('Tata');
})->name('tata');
Route::get('/vaqieh', function () {
    return view('Vaqieh');
})->name('vaqieh');


Route::get('datadiri', [DataDiriController::class, 'index']);
Route::get('datanayla', [DataDiriNaylaController::class, 'index']);
Route::get('datarandy', [DataDiriRandyController::class, 'index']);
Route::get('datatata', [DataDiriTataController::class, 'index']);
Route::get('datavaqieh', [DataDiriVaqiehController::class, 'index']);

