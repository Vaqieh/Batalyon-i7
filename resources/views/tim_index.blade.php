@extends('layout.app')
@section('content')
<div class="card">
    <h5 class="card-header">Data pasien</h5>
    <div class="card-body">
        {{--  @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif  --}}
        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <a href="/tim/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($item->foto)
                            <a href="{{ \Storage::url($item->foto) }}" target="blank">
                                <img src="{{ \Storage::url($item->foto) }}" width="50">
                            </a>
                        @endif
                        {{ $item->nama }}
                    </td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="/tim{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">Edit</a>
                        <form action="/tim/{{ $item->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm ml-2"
                             onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
