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
                    <p><strong>Nama:</strong> Nayla Rinaldi</p>
                    <p><strong>NIM:</strong> 2355301161</p>
                    <p><strong>Prodi:</strong> Teknik Informatika</p>
                    <p><strong>Alamat:</strong> Jalan Permata Sari</p>
                    <p><strong>Email:</strong> nayla23ti@pcr.ac.id</p>
                    <p><strong>Nomor Telepon:</strong> 0856581447</p>
                    <p><strong>Nama Kelompok:</strong> Batalyon-i7</p>
                </div>

                <!-- Kolom untuk gambar di kanan -->
                <div class="col-md-6">
                    <img src="{{ asset('image/nayla.jpg') }}" alt="Foto Nayla" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
