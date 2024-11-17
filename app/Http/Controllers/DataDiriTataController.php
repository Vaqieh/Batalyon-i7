<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataDiriTata;
use Illuminate\Http\Request;

class DataDiriTataController extends Controller
{
    public function index()
    {

        $data = DataDiriTata::first();

        return view('tata', compact('data'));
    }
}
