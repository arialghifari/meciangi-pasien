@extends('layouts.app')

@section('title', 'Pasien')

@section('content')

<div class="conainer-fluid">
    <form action="" method="post">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" id="tempat" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal-lahir" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="no-hp">No Hp</label>
                <input type="number" id="no-hp" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label for="diagnosa">Diagnosa</label>
                <input type="text" id="diagnosa" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <label for="tanggal-masuk-rs">Tanggal Masuk Rs</label>
                <input type="date" id="tanggal-masuk-rs" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="foto-pasien">Foto Pasien</label>
                <input type="file" id="foto-pasien" class="form-control" style="heigt:50px;">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Tambah Pasien</button>
            </div>
        </div>
    </form>
</div>

@endsection