<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataDiriNayla;
use Illuminate\Http\Request;

class DataDiriRandyController extends Controller
{
    public function index()
    {

        $data = DataDiriRandy::first();

        return view('randy', compact('data'));
    }
}
