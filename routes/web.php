<?php

use Illuminate\Support\Facades\Route;

Route::get('/tim', function () {
    return view('ViewVaqieh');
});

// Route::get('/tim',[App\Http\Controllers\timController::class],'index');
