@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

<div class="container-fluid">
    <div class="btn btn-primary"><a href="{{ action("HomeController@tambahPasien") }}">Tambah Pasien</a></div>

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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andriani Nasution</td>
                <td>Bima, 21 Desember 1998</td>
                <td>Jl. Merdeka Barat, Kec. Dompu, Kab. Bima</td>
                <td>081213182121</td>
                <td>Oscelaten Start</td>
                <td>2 Februari 2019</td>
                <td></td>
                <td></td>
            </tr>   
        </thead>

    </table>        
</div>

@endsection