@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

<div class="conainer-fluid">
    <form action="{{ action('PasienController@store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="no-hp">No Hp</label>
                <input type="number" name="no_hp" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="diagnosa">Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <label for="tanggal-masuk-rs">Tanggal Masuk Rs</label>
                <input type="date" name="tanggal_masuk_rs" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="foto-pasien">Foto Pasien</label>
                <input type="file" name="foto_pasien" class="form-control" style="heigt:50px;">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Tambah Pasien</button>
                <a class="btn btn-danger" href="{{ action("PasienController@index") }}">Kembali</a>
            </div>
        </div>
    </form>
    
</div>

@endsection