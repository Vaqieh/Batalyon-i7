<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class timController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = \App\Models\tim::latest()->get();
        return view('tim_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tim_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'foto' =>'required|image|mimes:jpeg,jpg,png|max:50000',
            'nama' => 'required|min:3',
            'nim' => 'required|numeric',
            'prodi' => 'required|nullable',
            'alamat' => 'nullable', //alamat boleh kosong
            'email' => 'required|nullable',
        ]);
        // dd($request->file('foto'));
        $tim = new \App\Models\Tim(); //membuat objek kosong di variabel model
        $tim->fill($requestData); //mengisi var model dengan data yang sudah divalidasi requestData
        $tim->foto = $request->file('foto')->store('public');
        $tim->save(); //menyimpan data ke database
        return redirect('/tim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
