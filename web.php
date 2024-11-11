<?php

use Illuminate\Support\Facades\Route;

Route::get('/tim', function () {
    return view('tim_index');
});

// Route::get('/tim',[App\Http\Controllers\timController::class],'index');
