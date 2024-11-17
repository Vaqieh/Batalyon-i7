<?php

namespace App\Http\Controllers;

// use App\Models\DataDiri;
use App\Models\DataDiriFerdinand;
// use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {

        $data = DataDiriFerdinand::first();

        return view('ferdinand', compact('data'));
    }
}
