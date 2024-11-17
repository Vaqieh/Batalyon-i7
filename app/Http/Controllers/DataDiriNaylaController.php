<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataDiriNayla;
use Illuminate\Http\Request;

class DataDiriNaylaController extends Controller
{
    public function index()
    {

        $data = DataDiriNayla::first();

        return view('nayla', compact('data'));
    }
}
