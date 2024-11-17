@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Data Tim</h5>
            <!-- Tambahkan enctype pada form -->
            <form action="/tim" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="foto">Foto Anggota</label>
                    <input type="file" class="form-control  @error('foto') is-invalid @enderror" id="foto" name="foto">
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="nama">Nama Anggota</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" value="{{ old('nama') }}">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim"
                        name="nim" value="{{ old('nim') }}">
                    <span class="text-danger">{{ $errors->first('nim') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="prodi">Prodi</label>
                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                        name="prodi" value="{{ old('prodi') }}">
                    <span class="text-danger">{{ $errors->first('prodi') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" value="{{ old('alamat') }}">
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                </div>
                <div class="form-group mt-1 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
@endsection
