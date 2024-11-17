<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataDiriVaqieh;
use Illuminate\Http\Request;

class DataDiriVaqiehController extends Controller
{
    public function index()
    {

        $data = DataDiriVaqieh::first();

        return view('vaqieh', compact('data'));
    }
}
