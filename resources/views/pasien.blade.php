@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

<div class="container-fluid">
    <div class="btn btn-primary"><a href="{{ action("PasienController@tambahPasien") }}">Tambah Pasien</a></div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Diagnosa</th>
                <th>Tgl Masuk RS</th>
                <th>Foto</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $index => $p)
            <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>{{ $p->diagnosa }}</td>
                    <td>{{ $p->tanggal_masuk_rs }}</td>
                    <td><img width="60px" src="assets/pasien/{{ $p->foto }}" alt=""></td>
                    <td class="d-flex justify-content-around"><a href="#" class="btn btn-sm btn-primary">Edit</a> <a href="#" class="btn btn-sm btn-danger">Hapus</a></td>
                </tr>
            @endforeach
        </thead>

    </table>        
</div>

@endsection