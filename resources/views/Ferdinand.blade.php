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
                    <p><strong>Nama:</strong> Ferdinand Kurnia Laia</p>
                    <p><strong>NIM:</strong> 2355301071</p>
                    <p><strong>Prodi:</strong> Teknik Informatika</p>
                    <p><strong>Alamat:</strong> Jalan Kembang sari</p>
                    <p><strong>Email:</strong> ferdinand23ti@pcr.ac.id</p>
                    <p><strong>Nomor Telepon:</strong> 081270255613</p>
                    <p><strong>Nama Kelompok:</strong> Batalyon-i7njh</p>
                </div>

                <!-- Kolom untuk gambar di kanan -->
                <div class="col-md-6">
                    <img src="{{ asset('image/ferdinand.jpg') }}" alt="Foto Ferdinand" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
