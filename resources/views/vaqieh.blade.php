@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1 class="text-center">Data Diri</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom untuk teks di kiri -->
                <div class="col-md-6">
                    <h1>Data Diri</h1>
                    <p><strong>Nama:</strong> Vaqieh Muwafvaq</p>
                    <p><strong>NIM:</strong> 2355301204</p>
                    <p><strong>Prodi:</strong> Teknik Informatika</p>
                    <p><strong>Alamat:</strong> Jl Umban Sari Gg.Permata Sari</p>
                    <p><strong>Email:</strong> vaqieh2323ti@pcr.ac.id</p>
                    <p><strong>Nomor Telepon:</strong> 085264663175</p>
                    <p><strong>Nama Kelompok:</strong> Batalyon-i7</p>
                </div>

                <!-- Kolom untuk gambar di kanan -->
                <div class="col-md-6">
                    <img src="{{ asset('image/vaqieh.jpg') }}" alt="Foto Tata" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
