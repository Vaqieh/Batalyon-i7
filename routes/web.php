<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataDiriController;
Route::get('/tim', function () {
    return view('ViewVaqieh');
});

// Route::get('/tim',[App\Http\Controllers\timController::class],'index');

Route::get('datadiri', [DataDiriController::class, 'index']);
